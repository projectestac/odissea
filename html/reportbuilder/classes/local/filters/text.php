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

namespace core_reportbuilder\local\filters;

use core_reportbuilder\local\helpers\database;

/**
 * Text report filter
 *
 * @package     core_reportbuilder
 * @copyright   2021 David Matamoros <davidmc@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class text extends base {

    /** @var int */
    public const ANY_VALUE = 0;

    /** @var int */
    public const CONTAINS = 1;

    /** @var int */
    public const DOES_NOT_CONTAIN = 2;

    /** @var int */
    public const IS_EQUAL_TO = 3;

    /** @var int */
    public const IS_NOT_EQUAL_TO = 4;

    /** @var int */
    public const STARTS_WITH = 5;

    /** @var int */
    public const ENDS_WITH = 6;

    /** @var int */
    public const IS_EMPTY = 7;

    /** @var int */
    public const IS_NOT_EMPTY = 8;

    /**
     * Return an array of operators available for this filter
     *
     * @return array of comparison operators
     */
    private function get_operators() : array {
        $operators = [
            self::ANY_VALUE => get_string('filterisanyvalue', 'core_reportbuilder'),
            self::CONTAINS => get_string('filtercontains', 'core_reportbuilder'),
            self::DOES_NOT_CONTAIN => get_string('filterdoesnotcontain', 'core_reportbuilder'),
            self::IS_EQUAL_TO => get_string('filterisequalto', 'core_reportbuilder'),
            self::IS_NOT_EQUAL_TO => get_string('filterisnotequalto', 'core_reportbuilder'),
            self::STARTS_WITH => get_string('filterstartswith', 'core_reportbuilder'),
            self::ENDS_WITH => get_string('filterendswith', 'core_reportbuilder'),
            self::IS_EMPTY => get_string('filterisempty', 'core_reportbuilder'),
            self::IS_NOT_EMPTY => get_string('filterisnotempty', 'core_reportbuilder')
        ];

        return $this->filter->restrict_limited_operators($operators);
    }

    /**
     * Adds controls specific to this filter in the form.
     *
     * Operator selector use the "$this->name . '_operator'" naming convention and the fields to enter custom values should
     * use "$this->name . '_value'" or _value1/_value2/... in case there is more than one field for their naming.
     *
     * @param \MoodleQuickForm $mform
     */
    public function setup_form(\MoodleQuickForm $mform): void {
        $elements = [];
        $elements['operator'] = $mform->createElement('select', $this->name . '_operator',
            get_string('filterfieldoperator', 'core_reportbuilder', $this->get_header()), $this->get_operators());
        $elements['value'] = $mform->createElement('text', $this->name . '_value',
            get_string('filterfieldvalue', 'core_reportbuilder', $this->get_header()));

        $mform->addElement('group', $this->name . '_group', '', $elements, '', false);

        $mform->setType($this->name . '_value', PARAM_RAW);
        $mform->hideIf($this->name . '_value', $this->name . '_operator', 'eq', self::ANY_VALUE);
        $mform->hideIf($this->name . '_value', $this->name . '_operator', 'eq', self::IS_EMPTY);
        $mform->hideIf($this->name . '_value', $this->name . '_operator', 'eq', self::IS_NOT_EMPTY);
    }

    /**
     * Return filter SQL
     *
     * @param array|null $values
     * @return array array of two elements - SQL query and named parameters
     */
    public function get_sql_filter(?array $values) : array {
        global $DB;
        $name = database::generate_param_name();

        if (!$values) {
            return ['', []];
        }

        $operator = (int) ($values["{$this->name}_operator"] ?? self::ANY_VALUE);
        $value = $values["{$this->name}_value"] ?? '';

        $fieldsql = $this->filter->get_field_sql();
        $params = $this->filter->get_field_params();

        // Validate filter form values.
        if (!$this->validate_filter_values($operator, $value)) {
            // Filter configuration is invalid. Ignore the filter.
            return ['', []];
        }

        switch($operator) {
            case self::CONTAINS:
                $res = $DB->sql_like($fieldsql, ":$name", false, false);
                $value = $DB->sql_like_escape($value);
                $params[$name] = "%$value%";
                break;
            case self::DOES_NOT_CONTAIN:
                $res = $DB->sql_like($fieldsql, ":$name", false, false, true);
                $value = $DB->sql_like_escape($value);
                $params[$name] = "%$value%";
                break;
            case self::IS_EQUAL_TO:
                $res = $DB->sql_equal($fieldsql, ":$name", false, false);
                $params[$name] = $value;
                break;
            case self::IS_NOT_EQUAL_TO:
                $res = $DB->sql_equal($fieldsql, ":$name", false, false, true);
                $params[$name] = $value;
                break;
            case self::STARTS_WITH:
                $res = $DB->sql_like($fieldsql, ":$name", false, false);
                $value = $DB->sql_like_escape($value);
                $params[$name] = "$value%";
                break;
            case self::ENDS_WITH:
                $res = $DB->sql_like($fieldsql, ":$name", false, false);
                $value = $DB->sql_like_escape($value);
                $params[$name] = "%$value";
                break;
            case self::IS_EMPTY:
                $paramempty = database::generate_param_name();
                $res = "COALESCE({$fieldsql}, :{$paramempty}) = :{$name}";
                $params[$paramempty] = $params[$name] = '';
                break;
            case self::IS_NOT_EMPTY:
                $paramempty = database::generate_param_name();
                $res = "COALESCE({$fieldsql}, :{$paramempty}) != :{$name}";
                $params[$paramempty] = $params[$name] = '';
                break;
            default:
                // Filter configuration is invalid. Ignore the filter.
                return ['', []];
        }
        return array($res, $params);
    }

    /**
     * Validate filter form values
     *
     * @param int $operator
     * @param string|null $value
     * @return bool
     */
    private function validate_filter_values(int $operator, ?string $value): bool {
        $operatorsthatdontrequirevalue = [
            self::ANY_VALUE,
            self::IS_EMPTY,
            self::IS_NOT_EMPTY,
        ];

        if ($value === '' && !in_array($operator, $operatorsthatdontrequirevalue)) {
            return false;
        }

        return true;
    }

    /**
     * Return sample filter values
     *
     * @return array
     */
    public function get_sample_values(): array {
        return [
            "{$this->name}_operator" => self::IS_EQUAL_TO,
            "{$this->name}_value" => 'test',
        ];
    }
}
