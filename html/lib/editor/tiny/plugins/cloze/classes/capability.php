<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace tiny_cloze;

/**
 * Class capability to handle the upgrade of permissions for default roles.
 *
 * @package     tiny_cloze
 * @copyright   2026 Stephan Robotta <stephan.robotta@bfh.ch>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class capability {
    /**
     * The list of roles that should have the CAP_ALLOW for tiny/close:use.
     * @var string[]
     */
    public const ROLES_ALLOW_USE = ['student', 'teacher', 'editingteacher'];

    /**
     * The standard capapbility.
     * @var string
     */
    public const CAPABILITY_USE = 'tiny/cloze:use';

    /**
     * Array of \stdClass with properties id, shortname.
     * @var \stdClass[]
     */
    protected array|null $roles = null;

    /**
     * Array of \stdClass with properties id, contextid, roleid, capability, permission, timemodified, modifierid.
     * @var \stdClass[]
     */
    protected array|null $capabilities = null;

    /**
     * Checks is the standard site permissions have been changed when the plugin was installed.
     * There is no modification when only the editingteacher exists with the CAP_ALLOW permission.
     * @return bool
     */
    public function is_modified_since_install(): bool {
        // Check that there is only one role permission that exists.
        $capabilities = $this->get_capabilities();
        if (count($capabilities) !== 1) {
            return true;
        }
        // And that this permission is for the editing teacher and has CAP_ALLOW.
        // This was the case during the installation time of the plugin.
        $rolecap = reset($capabilities);
        $roles = $this->get_roles();
        if (
            !\array_key_exists($rolecap->roleid, $roles) ||
            $roles[$rolecap->roleid]->shortname !== 'editingteacher' ||
            $rolecap->permission != CAP_ALLOW
        ) {
            return true;
        }
        return false;
    }

    /**
     * Get objects with role short name and id for the standard roles that
     * should get the capability.
     * An role object contains the properties id and shortname.
     *
     * @return \stdClass[]
     */
    public function get_roles(): array {
        global $DB;
        if ($this->roles === null) {
            $this->roles = $DB->get_records_list(
                'role',
                'shortname',
                self::ROLES_ALLOW_USE,
                '',
                'id,shortname'
            );
        }
        return $this->roles;
    }

    /**
     * Get capabilities in the system context and tiny/close:use.
     * @return \stdClass[]
     */
    public function get_capabilities(): array {
        global $DB;

        if ($this->capabilities === null) {
            $this->capabilities = $DB->get_records(
                'role_capabilities',
                ['capability' => self::CAPABILITY_USE, 'contextid' => 1]
            );
        }
        return $this->capabilities;
    }

    /**
     * Change permissions of roles so that editingteacher, teacher and student
     * have the capability tiny/cloze:use set to permission CAP_ALLOW.
     * @return \stdClass
     */
    public function update_role_permissions(): \stdClass {
        global $DB, $USER;
        // The result object that contains information about the modifications done.
        $result = (object)[
            'changed' => 0,
            'log' => [],
        ];

        $roles = $this->get_roles();

        // Run over all the existing capabilities in system context.
        foreach ($this->get_capabilities() as $rec) {
            $roleshortname = '';
            // Check, if this is one of our desired roles.
            if (\array_key_exists($rec->roleid, $roles)) {
                $roleshortname = $roles[$rec->roleid]->shortname;
                unset($roles[$rec->roleid]);
            } else {
                $result->log[] = "Unkown role with id '{$rec->roleid}' skip changing permission.";
                continue;
            }
            // And whether the role does not yet have the correct permission.
            if ($rec->permission != CAP_ALLOW) {
                $rec->permission = CAP_ALLOW;
                $rec->timemodified = time();
                $rec->modifierid = $USER->id;
                $DB->update_record('role_capabilities', $rec);
                $result->log[] = "Updated role '{$roleshortname}' to CAP_ALLOW.";
                $result->changed++;
            } else {
                $result->log[] = "Role '{$roleshortname}' already has CAP_ALLOW.";
            }
        }
        // All remaining roles where not handled by the existing permission records,
        // so we need to add them here.
        foreach ($roles as $role) {
            $new = new \stdClass();
            $new->contextid = 1;
            $new->roleid = $role->id;
            $new->capability = self::CAPABILITY_USE;
            $new->permission = CAP_ALLOW;
            $new->timemodified = time();
            $new->modifierid = $USER->id;
            $DB->insert_record('role_capabilities', $new);
            echo "Inserted CAP_ALLOW for role '{$role->shortname}'.\n";
            $result->changed++;
        }
        return $result;
    }
}
