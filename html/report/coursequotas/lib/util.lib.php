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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Coursequotas report
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (https://github.com/projectestac/agora)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Formats a size figure and adds unit information
 *
 * @param int $size file size to be formatted
 * @return object number and units
 * @author Pau Ferrer (pau@moodle.com)
 */
function report_coursequotas_format_size(int $size) {
    $formatted = new \stdClass();
    $formatted->bytes = $size;

    $suffixes = ['Bytes', 'kB', 'MB', 'GB', 'TB'];

    $suffix = 0;
    while ($size > 1024 && $suffix < count($suffixes)) {
        $size /= 1024;
        $suffix++;
    }

    $formatted->number = number_format($size, 2, ',', '.');
    $formatted->unit = $suffixes[$suffix];

    return $formatted;
}

/**
 * Format a size figure and adds unit information in text
 *
 * @param int $size file size to be formatted
 * @return string number and units
 */
function report_coursequotas_format_size_text(int $size): string {
    $size = report_coursequotas_format_size($size);

    return $size->number . ' ' . $size->unit;
}

/**
 * Check Moodle capability
 *
 * @return bool
 * @throws coding_exception
 * @throws dml_exception
 */
function can_manage_files(): bool {
    return has_capability('report/coursequotas:manage', context_system::instance());
}

/**
 * Execute a du -sk to get the directory size. Counts the size of the filesystem blocks used
 *
 * @param $directory
 * @return float|int
 */
function report_coursequotas_get_directory_size($directory) {
    $size = 0;

    if (file_exists($directory)) {
        $size = exec('du -sk ' . $directory);
        $size = explode('/', $size);
        $size = (float)$size[0] * 1024; // Size in kB to bytes.
    }

    return $size;
}

/**
 * Sum up the size of all types of files
 *
 * @param $chartinfo
 * @return float|int
 */
function report_coursequotas_get_chart_info_total(array $chartinfo) {
    $total = 0;
    foreach ($chartinfo as $value) {
        $total += $value->bytes;
    }
    $total = $total / (1024 * 1024);

    return $total;
}
