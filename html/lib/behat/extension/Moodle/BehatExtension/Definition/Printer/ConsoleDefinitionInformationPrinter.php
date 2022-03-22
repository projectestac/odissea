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

namespace Moodle\BehatExtension\Definition\Printer;

use Behat\Behat\Definition\Printer\ConsoleDefinitionPrinter;
use Behat\Testwork\Suite\Suite;

// phpcs:disable moodle.NamingConventions.ValidFunctionName.LowercaseMethod

/**
 * Moodle console definition information printer.
 *
 * Used in moodle for definition printing.
 *
 * @package    core
 * @copyright  2016 Rajesh Taneja <rajesh@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class ConsoleDefinitionInformationPrinter extends ConsoleDefinitionPrinter {
    /** @var null|string */
    private $searchcriterion;

    /**
     * Sets search criterion.
     *
     * @param string $criterion
     */
    public function setSearchCriterion($criterion) {
        $this->searchcriterion = $criterion;
    }

    /**
     * Prints definition.
     *
     * @param Suite        $suite
     * @param Definition[] $definitions
     */
    public function printDefinitions(Suite $suite, $definitions) {
        $template = <<<TPL
<div class="step"><div class="stepdescription">{description}</div>
<div class="stepcontent"><span class="steptype">{type}</span><span class="stepregex">{regex}</span></div>
<div class="stepapipath">{apipath}</div>
</div>
TPL;

        $search = $this->searchcriterion;

        // If there is a specific type (given, when or then) required.
        if (strpos($search, '&&') !== false) {
            list($search, $type) = explode('&&', $search);
        }

        foreach ($definitions as $definition) {
            $definition = $this->translateDefinition($suite, $definition);

            if (!empty($type) && strtolower($definition->getType()) != $type) {
                continue;
            }

            $pattern = $definition->getPattern();

            if ($search && !preg_match('/' . str_replace(' ', '.*', preg_quote($search, '/') . '/'), $pattern)) {
                continue;
            }

            $description = $definition->getDescription();

            // Removing beginning and end.
            $pattern = substr($pattern, 2, strlen($pattern) - 4);

            // Replacing inline regex for expected info string.
            $pattern = preg_replace_callback(
                '/"\(\?P<([^>]*)>(.*?)"( |$)/',
                function ($matches) {
                    return '"' . strtoupper($matches[1]) . '" ';
                },
                $pattern
            );

            $definitiontoprint[] = strtr($template, [
                '{regex}'       => $pattern,
                '{type}'        => str_pad($definition->getType(), 5, ' ', STR_PAD_LEFT),
                '{description}' => $description ? $description : '',
                '{apipath}'     => $definition->getPath()
            ]);

            $this->write(implode("\n", $definitiontoprint));
            unset($definitiontoprint);
        }
    }
}
