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

namespace core;

use calc_formula;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/mathslib.php');

/**
 * Unit tests of mathslib wrapper and underlying EvalMath library.
 *
 * @package    core
 * @category   phpunit
 * @copyright  2007 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class mathslib_test extends \basic_testcase {

    /**
     * Tests the basic formula evaluation.
     */
    public function test__basic(): void {
        $formula = new calc_formula('=1+2');
        $res = $formula->evaluate();
        $this->assertSame($res, 3, '3+1 is: %s');
    }

    /**
     * Tests the formula params.
     */
    public function test__params(): void {
        $formula = new calc_formula('=a+b+c', array('a'=>10, 'b'=>20, 'c'=>30));
        $res = $formula->evaluate();
        $this->assertSame(60, $res, '10+20+30 is: %s');
    }

    /**
     * Tests the changed params.
     */
    public function test__changing_params(): void {
        $formula = new calc_formula('=a+b+c', array('a'=>10, 'b'=>20, 'c'=>30));
        $res = $formula->evaluate();
        $this->assertSame(60, $res, '10+20+30 is: %s');
        $formula->set_params(array('a'=>1, 'b'=>2, 'c'=>3));
        $res = $formula->evaluate();
        $this->assertSame(6, $res, 'changed params 1+2+3 is: %s');
    }

    /**
     * Tests the spreadsheet emulation function in formula.
     */
    public function test__calc_function(): void {
        $formula = new calc_formula('=sum(a, b, c)', array('a'=>10, 'b'=>20, 'c'=>30));
        $res = $formula->evaluate();
        $this->assertSame(60, $res, 'sum(a, b, c) is: %s');
    }

    public function test_other_functions(): void {
        $formula = new calc_formula('=average(1,2,3)');
        $this->assertSame(2, $formula->evaluate());

        $formula = new calc_formula('=mod(10,3)');
        $this->assertSame(1, $formula->evaluate());

        $formula = new calc_formula('=power(2,3)');
        $this->assertSame(8, $formula->evaluate());
    }

    public function test_conditional_functions(): void {
        // Test ifthenelse.
        $formula = new calc_formula('=ifthenelse(1,2,3)');
        $this->assertSame(2, (int)$formula->evaluate());

        $formula = new calc_formula('=ifthenelse(0,2,3)');
        $this->assertSame(3, (int) $formula->evaluate());

        $formula = new calc_formula('=ifthenelse(2<3,2,3)');
        $this->assertSame(2, (int) $formula->evaluate());

        // Test synonym if.
        $formula = new calc_formula('=if(1,2,3)');
        $this->assertSame(2, (int)$formula->evaluate());

        $formula = new calc_formula('=if(0,2,3)');
        $this->assertSame(3, (int) $formula->evaluate());

        $formula = new calc_formula('=if(2<3,2,3)');
        $this->assertSame(2, (int) $formula->evaluate());

        // Test cond_and.
        $formula = new calc_formula('=cond_and(1,1,1)');
        $this->assertSame(1, (int)$formula->evaluate());

        $formula = new calc_formula('=cond_and(1,1,0)');
        $this->assertSame(0, (int) $formula->evaluate());

        $formula = new calc_formula('=cond_and(0,0,0)');
        $this->assertSame(0, (int) $formula->evaluate());

        // Test synonym and.
        $formula = new calc_formula('=and(1,1,1)');
        $this->assertSame(1, (int)$formula->evaluate());

        $formula = new calc_formula('=and(1,1,0)');
        $this->assertSame(0, (int) $formula->evaluate());

        $formula = new calc_formula('=and(0,0,0)');
        $this->assertSame(0, (int) $formula->evaluate());

        // Test cond_or.
        $formula = new calc_formula('=cond_or(1,1,1)');
        $this->assertSame(1, (int)$formula->evaluate());

        $formula = new calc_formula('=cond_or(1,1,0)');
        $this->assertSame(1, (int) $formula->evaluate());

        $formula = new calc_formula('=cond_or(0,0,0)');
        $this->assertSame(0, (int) $formula->evaluate());

        // Test synonym or.
        $formula = new calc_formula('=or(1,1,1)');
        $this->assertSame(1, (int)$formula->evaluate());

        $formula = new calc_formula('=or(1,1,0)');
        $this->assertSame(1, (int) $formula->evaluate());

        $formula = new calc_formula('=or(0,0,0)');
        $this->assertSame(0, (int) $formula->evaluate());
    }

    public function test_conditional_operators(): void {
        $formula = new calc_formula('=2==2');
        $this->assertSame(1, $formula->evaluate());

        $formula = new calc_formula('=2>3');
        $this->assertSame(0, $formula->evaluate());
        $formula = new calc_formula('=2<3');
        $this->assertSame(1, $formula->evaluate());

        $formula = new calc_formula('=(2<=3)');
        $this->assertSame(1, $formula->evaluate());

        $formula = new calc_formula('=(2<=3)*10');
        $this->assertSame(10, $formula->evaluate());

        $formula = new calc_formula('=(2>=3)*10');
        $this->assertSame(0, $formula->evaluate());
        $formula = new calc_formula('=2<3*10');
        $this->assertSame(10, $formula->evaluate());
    }
    /**
     * Tests the min and max functions.
     */
    public function test__minmax_function(): void {
        $formula = new calc_formula('=min(a, b, c)', array('a'=>10, 'b'=>20, 'c'=>30));
        $res = $formula->evaluate();
        $this->assertSame(10, $res, 'minimum is: %s');
        $formula = new calc_formula('=max(a, b, c)', array('a'=>10, 'b'=>20, 'c'=>30));
        $res = $formula->evaluate();
        $this->assertSame(30, $res, 'maximum is: %s');
    }

    /**
     * Tests special chars.
     */
    public function test__specialchars(): void {
        $formula = new calc_formula('=gi1 + gi2 + gi11', array('gi1'=>10, 'gi2'=>20, 'gi11'=>30));
        $res = $formula->evaluate();
        $this->assertSame(60, $res, 'sum is: %s');
    }

    /**
     * Tests some slightly more complex expressions.
     */
    public function test__more_complex_expressions(): void {
        $formula = new calc_formula('=pi() + a', array('a'=>10));
        $res = $formula->evaluate();
        $this->assertSame(pi()+10, $res);
        $formula = new calc_formula('=pi()^a', array('a'=>10));
        $res = $formula->evaluate();
        $this->assertSame(pow(pi(), 10), $res);
        $formula = new calc_formula('=-8*(5/2)^2*(1-sqrt(4))-8');
        $res = $formula->evaluate();
        $this->assertSame(-8*pow((5/2), 2)*(1-sqrt(4))-8, $res);
    }

    /**
     * Tests some slightly more complex expressions.
     */
    public function test__error_handling(): void {
        $formula = new calc_formula('=pi( + a', array('a'=>10));
        $res = $formula->evaluate();
        $this->assertFalse($res);
        $this->assertSame(get_string('unexpectedoperator', 'mathslib', '+'), $formula->get_error());

        $formula = new calc_formula('=pi(');
        $res = $formula->evaluate();
        $this->assertSame($res, false);
        $this->assertSame(get_string('expectingaclosingbracket', 'mathslib'), $formula->get_error());

        $formula = new calc_formula('=pi()^');
        $res = $formula->evaluate();
        $this->assertSame($res, false);
        $this->assertSame(get_string('operatorlacksoperand', 'mathslib', '^'), $formula->get_error());

    }

    public function test_rounding_function(): void {
        // Rounding to the default number of decimal places.
        // The default == 0.

        $formula = new calc_formula('=round(2.5)');
        $this->assertSame(3.0, $formula->evaluate());

        $formula = new calc_formula('=round(1.5)');
        $this->assertSame(2.0, $formula->evaluate());

        $formula = new calc_formula('=round(-1.49)');
        $this->assertSame(-1.0, $formula->evaluate());

        $formula = new calc_formula('=round(-2.49)');
        $this->assertSame(-2.0, $formula->evaluate());

        $formula = new calc_formula('=round(-1.5)');
        $this->assertSame(-2.0, $formula->evaluate());

        $formula = new calc_formula('=round(-2.5)');
        $this->assertSame(-3.0, $formula->evaluate());

        $formula = new calc_formula('=ceil(2.5)');
        $this->assertSame(3.0, $formula->evaluate());

        $formula = new calc_formula('=ceil(1.5)');
        $this->assertSame(2.0, $formula->evaluate());

        $formula = new calc_formula('=ceil(-1.49)');
        $this->assertSame(-1.0, $formula->evaluate());

        $formula = new calc_formula('=ceil(-2.49)');
        $this->assertSame(-2.0, $formula->evaluate());

        $formula = new calc_formula('=ceil(-1.5)');
        $this->assertSame(-1.0, $formula->evaluate());

        $formula = new calc_formula('=ceil(-2.5)');
        $this->assertSame(-2.0, $formula->evaluate());

        $formula = new calc_formula('=floor(2.5)');
        $this->assertSame(2.0, $formula->evaluate());

        $formula = new calc_formula('=floor(1.5)');
        $this->assertSame(1.0, $formula->evaluate());

        $formula = new calc_formula('=floor(-1.49)');
        $this->assertSame(-2.0, $formula->evaluate());

        $formula = new calc_formula('=floor(-2.49)');
        $this->assertSame(-3.0, $formula->evaluate());

        $formula = new calc_formula('=floor(-1.5)');
        $this->assertSame(-2.0, $formula->evaluate());

        $formula = new calc_formula('=floor(-2.5)');
        $this->assertSame(-3.0, $formula->evaluate());

        // Rounding to an explicit number of decimal places.

        $formula = new calc_formula('=round(2.5, 1)');
        $this->assertSame(2.5, $formula->evaluate());

        $formula = new calc_formula('=round(2.5, 0)');
        $this->assertSame(3.0, $formula->evaluate());

        $formula = new calc_formula('=round(1.2345, 2)');
        $this->assertSame(1.23, $formula->evaluate());

        $formula = new calc_formula('=round(123.456, -1)');
        $this->assertSame(120.0, $formula->evaluate());
    }

    public function test_scientific_notation(): void {
        $formula = new calc_formula('=10e10');
        $this->assertEqualsWithDelta(1e11, $formula->evaluate(), 1e11 * 1e-15);

        $formula = new calc_formula('=10e-10');
        $this->assertEqualsWithDelta(1e-9, $formula->evaluate(), 1e11 * 1e-15);

        $formula = new calc_formula('=10e+10');
        $this->assertEqualsWithDelta(1e11, $formula->evaluate(), 1e11 * 1e-15);

        $formula = new calc_formula('=10e10*5');
        $this->assertEqualsWithDelta(5e11, $formula->evaluate(), 1e11 * 1e-15);

        $formula = new calc_formula('=10e10^2');
        $this->assertEqualsWithDelta(1e22, $formula->evaluate(), 1e22 * 1e-15);
    }

    public function test_rand_float(): void {
        $formula = new calc_formula('=rand_float()');
        $result = $formula->evaluate();
        $this->assertTrue(is_float($result));
    }

    /**
     * Tests the modulo operator.
     *
     * @covers calc_formula::evaluate
     * @dataProvider moduloOperatorData
     *
     * @param string $formula
     * @param array $values
     * @param int|float $expectedResult
     */
    public function shouldSupportModuloOperator($formula, $values, $expectedResult)
    {
        $formula = new calc_formula($formula);
        $formula->set_params($values);
        $this->assertEquals($expectedResult, $formula->evaluate());
    }

    /**
     * Data provider for shouldSupportModuloOperator
     *
     * @return array
     */
    public function moduloOperatorData() {
        return array(
            array(
                '=a%b', // 9%3 => 0
                array('a' => 9, 'b' => 3),
                0
            ),
            array(
                '=a%b', // 10%3 => 1
                array('a' => 10, 'b' => 3),
                1
            ),
            array(
                '=10-a%(b+c*d)', // 10-10%(7-2*2) => 9
                array('a' => '10', 'b' => 7, 'c' => -2, 'd' => 2),
                9
            )
        );
    }

    /**
     * Tests the double minus as plus.
     *
     * @covers calc_formula::evaluate
     * @dataProvider doubleMinusData
     *
     * @param string $formula
     * @param array $values
     * @param int|float $expectedResult
     */
    public function shouldConsiderDoubleMinusAsPlus($formula, $values, $expectedResult)
    {
        $formula = new calc_formula($formula);
        $formula->set_params($values);
        $this->assertEquals($expectedResult, $formula->evaluate());
    }

    /**
     * Data provider for shouldConsiderDoubleMinusAsPlus
     *
     * @return array
     */
    public function doubleMinusData() {
        return array(
            array(
                '=a+b*c--d', // 1+2*3--4 => 1+6+4 => 11
                array(
                    'a' => 1,
                    'b' => 2,
                    'c' => 3,
                    'd' => 4
                ),
                11
            ),
            array(
                '=a+b*c--d', // 1+2*3---4 => 1+6-4 => 3
                array(
                    'a' => 1,
                    'b' => 2,
                    'c' => 3,
                    'd' => -4
                ),
                3
            )
        );
    }
}
