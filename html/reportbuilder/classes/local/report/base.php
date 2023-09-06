<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

declare(strict_types=1);

namespace core_reportbuilder\local\report;

use coding_exception;
use context;
use lang_string;
use core_reportbuilder\local\entities\base as entity_base;
use core_reportbuilder\local\filters\base as filter_base;
use core_reportbuilder\local\helpers\database;
use core_reportbuilder\local\helpers\user_filter_manager;
use core_reportbuilder\local\models\report;

/**
 * Base class for all reports
 *
 * @package     core_reportbuilder
 * @copyright   2020 Paul Holden <paulh@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class base {

    /** @var int Custom report type value */
    public const TYPE_CUSTOM_REPORT = 0;

    /** @var int System report type value */
    public const TYPE_SYSTEM_REPORT = 1;

    /** @var int Default paging limit */
    public const DEFAULT_PAGESIZE = 30;

    /** @var report $report Report persistent */
    private $report;

    /** @var string $maintable */
    private $maintable = '';

    /** @var string $maintablealias */
    private $maintablealias = '';

    /** @var array $sqljoins */
    private $sqljoins = [];

    /** @var array $sqlwheres */
    private $sqlwheres = [];

    /** @var array $sqlparams */
    private $sqlparams = [];

    /** @var entity_base[] $entities */
    private $entities = [];

    /** @var lang_string[] */
    private $entitytitles = [];

    /** @var column[] $columns */
    private $columns = [];

    /** @var filter[] $conditions */
    private $conditions = [];

    /** @var filter[] $filters */
    private $filters = [];

    /** @var bool $downloadable Set if the report can be downloaded */
    private $downloadable = false;

    /** @var string $downloadfilename Name of the downloaded file */
    private $downloadfilename = '';

    /** @var int Default paging size */
    private $defaultperpage = self::DEFAULT_PAGESIZE;

    /**
     * Base report constructor
     *
     * @param report $report
     */
    public function __construct(report $report) {
        $this->report = $report;

        // Initialise and validate the report.
        $this->initialise();
        $this->validate();
    }

    /**
     * Returns persistent class used when initialising this report
     *
     * @return report
     */
    final public function get_report_persistent(): report {
        return $this->report;
    }

    /**
     * Initialise report. Specify which columns, filters, etc should be present
     *
     * To set the base query use:
     * - {@see set_main_table}
     * - {@see add_base_condition_simple} or {@see add_base_condition_sql}
     * - {@see add_join}
     *
     * To add content to the report use:
     * - {@see add_entity}
     * - {@see add_column}
     * - {@see add_filter}
     * - etc
     */
    abstract protected function initialise(): void;

    /**
     * Get the report availability. Sub-classes should override this method to declare themselves unavailable, for example if
     * they require classes that aren't present due to missing plugin
     *
     * @return bool
     */
    public static function is_available(): bool {
        return true;
    }

    /**
     * Perform some basic validation about expected class properties
     *
     * @throws coding_exception
     */
    protected function validate(): void {
        if (empty($this->maintable)) {
            throw new coding_exception('Report must define main table by calling $this->set_main_table()');
        }

        if (empty($this->columns)) {
            throw new coding_exception('Report must define at least one column by calling $this->add_column()');
        }
    }

    /**
     * Set the main table and alias for the SQL query
     *
     * @param string $tablename
     * @param string $tablealias
     */
    final public function set_main_table(string $tablename, string $tablealias = ''): void {
        $this->maintable = $tablename;
        $this->maintablealias = $tablealias;
    }

    /**
     * Get the main table name
     *
     * @return string
     */
    final public function get_main_table(): string {
        return $this->maintable;
    }

    /**
     * Get the alias for the main table
     *
     * @return string
     */
    final public function get_main_table_alias(): string {
        return $this->maintablealias;
    }

    /**
     * Adds report JOIN clause that is always added
     *
     * @param string $join
     * @param array $params
     * @param bool $validateparams Some queries might add non-standard params and validation could fail
     */
    protected function add_join(string $join, array $params = [], bool $validateparams = true): void {
        if ($validateparams) {
            database::validate_params($params);
        }

        $this->sqljoins[trim($join)] = trim($join);
        $this->sqlparams += $params;
    }

    /**
     * Return report JOIN clauses
     *
     * @return array
     */
    public function get_joins(): array {
        return array_values($this->sqljoins);
    }

    /**
     * Define simple "field = value" clause to apply to the report query
     *
     * @param string $fieldname
     * @param mixed $fieldvalue
     */
    final public function add_base_condition_simple(string $fieldname, $fieldvalue): void {
        if ($fieldvalue === null) {
            $this->add_base_condition_sql("{$fieldname} IS NULL");
        } else {
            $fieldvalueparam = database::generate_param_name();
            $this->add_base_condition_sql("{$fieldname} = :{$fieldvalueparam}", [
                $fieldvalueparam => $fieldvalue,
            ]);
        }
    }

    /**
     * Define more complex clause that will always be applied to the report query
     *
     * @param string $where
     * @param array $params Note that the param names should be generated by {@see database::generate_param_name}
     */
    final public function add_base_condition_sql(string $where, array $params = []): void {
        database::validate_params($params);

        $this->sqlwheres[] = trim($where);
        $this->sqlparams = $params + $this->sqlparams;
    }

    /**
     * Return base select/params for the report query
     *
     * @return array [string $select, array $params]
     */
    final public function get_base_condition(): array {
        return [
            implode(' AND ', $this->sqlwheres),
            $this->sqlparams,
        ];
    }

    /**
     * Adds given entity, along with it's columns and filters, to the report
     *
     * @param entity_base $entity
     */
    final protected function add_entity(entity_base $entity): void {
        $entityname = $entity->get_entity_name();
        $this->annotate_entity($entityname, $entity->get_entity_title());
        $this->entities[$entityname] = $entity->initialise();
    }

    /**
     * Returns the entity added to the report from the given entity name
     *
     * @param string $name
     * @return entity_base
     * @throws coding_exception
     */
    final protected function get_entity(string $name): entity_base {
        if (!array_key_exists($name, $this->entities)) {
            throw new coding_exception('Invalid entity name', $name);
        }

        return $this->entities[$name];
    }

    /**
     * Returns the list of all the entities added to the report
     *
     * @return entity_base[]
     */
    final protected function get_entities(): array {
        return $this->entities;
    }

    /**
     * Define a new entity for the report
     *
     * @param string $name
     * @param lang_string $title
     * @throws coding_exception
     */
    final protected function annotate_entity(string $name, lang_string $title): void {
        if (empty($name) || $name !== clean_param($name, PARAM_ALPHANUMEXT)) {
            throw new coding_exception('Entity name must be comprised of alphanumeric character, underscore or dash');
        }

        $this->entitytitles[$name] = $title;
    }

    /**
     * Returns title of given report entity
     *
     * @param string $name
     * @return lang_string
     * @throws coding_exception
     */
    final public function get_entity_title(string $name): lang_string {
        if (!array_key_exists($name, $this->entitytitles)) {
            throw new coding_exception('Invalid entity name', $name);
        }

        return $this->entitytitles[$name];
    }

    /**
     * Adds a column to the report
     *
     * @param column $column
     * @return column
     * @throws coding_exception
     */
    final protected function add_column(column $column): column {
        if (!array_key_exists($column->get_entity_name(), $this->entitytitles)) {
            throw new coding_exception('Invalid entity name', $column->get_entity_name());
        }

        $name = $column->get_name();
        if (empty($name) || $name !== clean_param($name, PARAM_ALPHANUMEXT)) {
            throw new coding_exception('Column name must be comprised of alphanumeric character, underscore or dash');
        }

        $uniqueidentifier = $column->get_unique_identifier();
        if (array_key_exists($uniqueidentifier, $this->columns)) {
            throw new coding_exception('Duplicate column identifier', $uniqueidentifier);
        }

        $this->columns[$uniqueidentifier] = $column;

        return $column;
    }

    /**
     * Add given column to the report from an entity
     *
     * The entity must have already been added to the report before calling this method
     *
     * @param string $uniqueidentifier
     * @return column
     */
    final protected function add_column_from_entity(string $uniqueidentifier): column {
        [$entityname, $columnname] = explode(':', $uniqueidentifier, 2);

        return $this->add_column($this->get_entity($entityname)->get_column($columnname));
    }

    /**
     * Add given columns to the report from one or more entities
     *
     * Each entity must have already been added to the report before calling this method
     *
     * @param string[] $columns Unique identifier of each entity column
     */
    final protected function add_columns_from_entities(array $columns): void {
        foreach ($columns as $column) {
            $this->add_column_from_entity($column);
        }
    }

    /**
     * Return report column by unique identifier
     *
     * @param string $uniqueidentifier
     * @return column|null
     */
    final public function get_column(string $uniqueidentifier): ?column {
        return $this->columns[$uniqueidentifier] ?? null;
    }

    /**
     * Return all available report columns
     *
     * @return column[]
     */
    final public function get_columns(): array {
        return array_filter($this->columns, static function(column $column): bool {
            return $column->get_is_available();
        });
    }

    /**
     * Return all active report columns (by default, all available columns)
     *
     * @return column[]
     */
    public function get_active_columns(): array {
        return $this->get_columns();
    }

    /**
     * Return all active report columns, keyed by their alias (only active columns in a report would have a valid alias/index)
     *
     * @return column[]
     */
    final public function get_active_columns_by_alias(): array {
        $columns = [];

        foreach ($this->get_active_columns() as $column) {
            $columns[$column->get_column_alias()] = $column;
        }

        return $columns;
    }

    /**
     * Adds a condition to the report
     *
     * @param filter $condition
     * @return filter
     * @throws coding_exception
     */
    final protected function add_condition(filter $condition): filter {
        if (!array_key_exists($condition->get_entity_name(), $this->entitytitles)) {
            throw new coding_exception('Invalid entity name', $condition->get_entity_name());
        }

        $name = $condition->get_name();
        if (empty($name) || $name !== clean_param($name, PARAM_ALPHANUMEXT)) {
            throw new coding_exception('Condition name must be comprised of alphanumeric character, underscore or dash');
        }

        $uniqueidentifier = $condition->get_unique_identifier();
        if (array_key_exists($uniqueidentifier, $this->conditions)) {
            throw new coding_exception('Duplicate condition identifier', $uniqueidentifier);
        }

        $this->conditions[$uniqueidentifier] = $condition;

        return $condition;
    }

    /**
     * Add given condition to the report from an entity
     *
     * The entity must have already been added to the report before calling this method
     *
     * @param string $uniqueidentifier
     * @return filter
     */
    final protected function add_condition_from_entity(string $uniqueidentifier): filter {
        [$entityname, $conditionname] = explode(':', $uniqueidentifier, 2);

        return $this->add_condition($this->get_entity($entityname)->get_condition($conditionname));
    }

    /**
     * Add given conditions to the report from one or more entities
     *
     * Each entity must have already been added to the report before calling this method
     *
     * @param string[] $conditions Unique identifier of each entity condition
     */
    final protected function add_conditions_from_entities(array $conditions): void {
        foreach ($conditions as $condition) {
            $this->add_condition_from_entity($condition);
        }
    }

    /**
     * Return report condition by unique identifier
     *
     * @param string $uniqueidentifier
     * @return filter|null
     */
    final public function get_condition(string $uniqueidentifier): ?filter {
        return $this->conditions[$uniqueidentifier] ?? null;
    }

    /**
     * Return all available report conditions
     *
     * @return filter[]
     */
    final public function get_conditions(): array {
        return array_filter($this->conditions, static function(filter $condition): bool {
            return $condition->get_is_available();
        });
    }

    /**
     * Return all active report conditions (by default, all available conditions)
     *
     * @return filter[]
     */
    public function get_active_conditions(): array {
        return $this->get_conditions();
    }

    /**
     * Return all active report condition instances
     *
     * @return filter_base[]
     */
    final public function get_condition_instances(): array {
        return array_map(static function(filter $condition): filter_base {
            /** @var filter_base $conditionclass */
            $conditionclass = $condition->get_filter_class();

            return $conditionclass::create($condition);
        }, $this->get_active_conditions());
    }

    /**
     * Set the condition values of the report
     *
     * @param array $values
     * @return bool
     */
    final public function set_condition_values(array $values): bool {
        $this->report->set('conditiondata', json_encode($values))
            ->save();

        return true;
    }

    /**
     * Get the condition values of the report
     *
     * @return array
     */
    final public function get_condition_values(): array {
        $conditions = (string) $this->report->get('conditiondata');

        return (array) json_decode($conditions);
    }

    /**
     * Set the settings values of the report
     *
     * @param array $values
     * @return bool
     */
    final public function set_settings_values(array $values): bool {
        $currentsettings = $this->get_settings_values();
        $settings = array_merge($currentsettings, $values);
        $this->report->set('settingsdata', json_encode($settings))
            ->save();
        return true;
    }

    /**
     * Get the settings values of the report
     *
     * @return array
     */
    final public function get_settings_values(): array {
        $settings = (string) $this->report->get('settingsdata');

        return (array) json_decode($settings);
    }

    /**
     * Adds a filter to the report
     *
     * @param filter $filter
     * @return filter
     * @throws coding_exception
     */
    final protected function add_filter(filter $filter): filter {
        if (!array_key_exists($filter->get_entity_name(), $this->entitytitles)) {
            throw new coding_exception('Invalid entity name', $filter->get_entity_name());
        }

        $name = $filter->get_name();
        if (empty($name) || $name !== clean_param($name, PARAM_ALPHANUMEXT)) {
            throw new coding_exception('Filter name must be comprised of alphanumeric character, underscore or dash');
        }

        $uniqueidentifier = $filter->get_unique_identifier();
        if (array_key_exists($uniqueidentifier, $this->filters)) {
            throw new coding_exception('Duplicate filter identifier', $uniqueidentifier);
        }

        $this->filters[$uniqueidentifier] = $filter;

        return $filter;
    }

    /**
     * Add given filter to the report from an entity
     *
     * The entity must have already been added to the report before calling this method
     *
     * @param string $uniqueidentifier
     * @return filter
     */
    final protected function add_filter_from_entity(string $uniqueidentifier): filter {
        [$entityname, $filtername] = explode(':', $uniqueidentifier, 2);

        return $this->add_filter($this->get_entity($entityname)->get_filter($filtername));
    }

    /**
     * Add given filters to the report from one or more entities
     *
     * Each entity must have already been added to the report before calling this method
     *
     * @param string[] $filters Unique identifier of each entity filter
     */
    final protected function add_filters_from_entities(array $filters): void {
        foreach ($filters as $filter) {
            $this->add_filter_from_entity($filter);
        }
    }

    /**
     * Return report filter by unique identifier
     *
     * @param string $uniqueidentifier
     * @return filter|null
     */
    final public function get_filter(string $uniqueidentifier): ?filter {
        return $this->filters[$uniqueidentifier] ?? null;
    }

    /**
     * Return all available report filters
     *
     * @return filter[]
     */
    final public function get_filters(): array {
        return array_filter($this->filters, static function(filter $filter): bool {
            return $filter->get_is_available();
        });
    }

    /**
     * Return all active report filters (by default, all available filters)
     *
     * @return filter[]
     */
    public function get_active_filters(): array {
        return $this->get_filters();
    }

    /**
     * Return all active report filter instances
     *
     * @return filter_base[]
     */
    final public function get_filter_instances(): array {
        return array_map(static function(filter $filter): filter_base {
            /** @var filter_base $filterclass */
            $filterclass = $filter->get_filter_class();

            return $filterclass::create($filter);
        }, $this->get_active_filters());
    }

    /**
     * Set the filter values of the report
     *
     * @param array $values
     * @return bool
     */
    final public function set_filter_values(array $values): bool {
        return user_filter_manager::set($this->report->get('id'), $values);
    }

    /**
     * Get the filter values of the report
     *
     * @return array
     */
    final public function get_filter_values(): array {
        return user_filter_manager::get($this->report->get('id'));
    }

    /**
     * Return the number of filter instances that are being applied based on the report's filter values (i.e. user has
     * configured them from their initial "Any value" state)
     *
     * @return int
     */
    final public function get_applied_filter_count(): int {
        $values = $this->get_filter_values();
        $applied = array_filter($this->get_filter_instances(), static function(filter_base $filter) use ($values): bool {
            return $filter->applies_to_values($values);
        });

        return count($applied);
    }

    /**
     * Set if the report can be downloaded.
     *
     * @param bool $downloadable
     * @param string $downloadfilename If the report is downloadable, then a filename should be provided here
     */
    final public function set_downloadable(bool $downloadable, string $downloadfilename = 'export'): void {
        $this->downloadable = $downloadable;
        $this->downloadfilename = $downloadfilename;
    }

    /**
     * Get if the report can be downloaded.
     *
     * @return bool
     */
    final public function is_downloadable(): bool {
        return $this->downloadable;
    }

    /**
     * Return the downloadable report filename
     *
     * @return string
     */
    final public function get_downloadfilename(): string {
        return $this->downloadfilename;
    }

    /**
     * Returns the report context
     *
     * @return context
     */
    public function get_context(): context {
        return $this->report->get_context();
    }

    /**
     * Set the default 'per page' size
     *
     * @param int $defaultperpage
     */
    public function set_default_per_page(int $defaultperpage): void {
        $this->defaultperpage = $defaultperpage;
    }

    /**
     * Default 'per page' size
     *
     * @return int
     */
    public function get_default_per_page(): int {
        return $this->defaultperpage;
    }
}
