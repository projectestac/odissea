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

/**
 * Coverage information for PHPUnit.
 *
 * @package    core
 * @category   phpunit
 * @copyright  2018 Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Coverage information for PHPUnit.
 *
 * @copyright  2018 Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class phpunit_coverage_info {

    /**
     * @var array The list of folders relative to the plugin root to whitelist in coverage generation.
     * @deprecated since Moodle 3.11 MDL-70745 - please don't use this property any more.
     * @todo MDL-71067 - remove in Moodle 4.3
     */
    protected $whitelistfolders = [];

    /**
     * @var array The list of files relative to the plugin root to whitelist in coverage generation.
     * @deprecated since Moodle 3.11 MDL-70745 - please don't use this property any more.
     * @todo MDL-71067 - remove in Moodle 4.3
     */
    protected $whitelistfiles = [];

    /** @var array The list of folders relative to the plugin root to include in coverage generation. */
    protected $includelistfolders = [];

    /** @var array The list of files relative to the plugin root to include in coverage generation. */
    protected $includelistfiles = [];

    /** @var array The list of folders relative to the plugin root to exclude from coverage generation. */
    protected $excludelistfolders = [];

    /** @var array The list of files relative to the plugin root to exclude from coverage generation. */
    protected $excludelistfiles = [];

    /**
     * Get the formatted XML list of files and folders to include.
     *
     * @param   string  $plugindir The root of the plugin, relative to the dataroot.
     * @return  array
     */
    final public function get_includelists(string $plugindir) : array {
        $coverages = [];

        if (!empty($plugindir)) {
            $plugindir .= "/";

            // TODO: MDL-71067 - remove this whole block once these properties deprecation period ends.
            if (!empty($this->whitelistfolders) || !empty($this->whitelistfiles)) {
                // Warning if the deprecated (whitelist) properties are found.
                echo "Warning: \$whitelistfolders and \$whitelistfiles in " .
                    "coverage.php files are deprecated since Moodle 3.11. " .
                    "Please, replace them with \$includelistfolders and " .
                    "\$includelistfiles in {$plugindir}tests/coverage.php\n";

                foreach ($this->whitelistfolders as $folder) {
                    $coverages[] = html_writer::tag('directory', "{$plugindir}{$folder}", ['suffix' => '.php']);
                }

                foreach ($this->whitelistfiles as $file) {
                    $coverages[] = html_writer::tag('file', "{$plugindir}{$file}");
                }
            }
        }

        foreach ($this->includelistfolders as $folder) {
            $coverages[] = html_writer::tag('directory', "{$plugindir}{$folder}", ['suffix' => '.php']);
        }

        foreach ($this->includelistfiles as $file) {
            $coverages[] = html_writer::tag('file', "{$plugindir}{$file}");
        }

        return $coverages;
    }

    /**
     * Get the formatted XML list of files and folders to exclude.
     *
     * @param   string  $plugindir The root of the plugin, relative to the dataroot.
     * @return  array
     */
    final public function get_excludelists(string $plugindir) : array {
        $coverages = [];

        if (!empty($plugindir)) {
            $plugindir .= "/";
        }

        foreach ($this->excludelistfolders as $folder) {
            $coverages[] = html_writer::tag('directory', "{$plugindir}{$folder}", ['suffix' => '.php']);
        }

        foreach ($this->excludelistfiles as $file) {
            $coverages[] = html_writer::tag('file', "{$plugindir}{$file}");
        }

        return $coverages;
    }
}
