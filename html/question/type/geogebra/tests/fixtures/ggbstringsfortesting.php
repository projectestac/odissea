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
 * Test helpers for the geogebra question type.
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qtype_geogebra;
/**
 * Class ggbstringsfortesting
 */
class ggbstringsfortesting {
    public static $views = '{"is3D":false,"AV":false,"SV":false,"CV":false,"EV2":false,"CP":false,"PC":false,"DA":false,"FI":false,
        "PV":false,"macro":false}';
    public static $pointparameters = 'asd'; // This isn't a ggbBase64 string but it's ok for testing...
    // phpcs:disable
    public static $pointxml = <<<EOT
<?xml version="1.0" encoding="utf-8"?>
 <geogebra format="5.0" version="4.9.314.0" id="94863160-8073-49ff-b877-950ce82a175b"  xsi:noNamespaceSchemaLocation="http://www.geogebra.org/ggb.xsd" xmlns="" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" >
 <gui>
 	<window width="800" height="430" />
 	<perspectives>
 <perspective id="tmp">
 	<panes>
 		<pane location="" divider="0.18875" orientation="1" />
 	</panes>
 	<views>
 		<view id="4097" visible="false" inframe="true" stylebar="true" location="1,1,1" size="400" window="960,580,700,550" />
 		<view id="4" toolbar="0 59 || 2020 , 2021 , 2022 , 66 || 2001 , 2003 , 2002 , 2004 , 2005 || 2040 , 2041 , 2042 , 2044 , 2043" visible="false" inframe="false" stylebar="false" location="1,1" size="300" window="100,100,600,400" />
 		<view id="8" toolbar="1001 | 1002 | 1003  || 1005 | 1004 || 1006 | 1007 | 1010 | 1011 || 1008 1009 || 66 68 || 6" visible="false" inframe="false" stylebar="false" location="1,3" size="300" window="100,100,600,400" />
 		<view id="1" visible="true" inframe="false" stylebar="true" location="1" size="798" window="100,100,600,400" />
 		<view id="2" visible="false" inframe="true" stylebar="true" location="3" size="151" window="18,166,250,400" />
 		<view id="16" visible="false" inframe="false" stylebar="false" location="1" size="150" window="50,50,500,500" />
 		<view id="32" visible="false" inframe="false" stylebar="true" location="1" size="150" window="50,50,500,500" />
 		<view id="64" visible="false" inframe="true" stylebar="true" location="1" size="150" window="50,50,500,500" />
 		<view id="128" visible="false" inframe="true" stylebar="false" location="1" size="480" window="50,50,500,500" />
 		<view id="70" toolbar="0 || 2020 || 2021 || 2022" visible="false" inframe="true" stylebar="true" location="1" size="150" window="50,50,500,500" />
 	</views>
 	<toolbar show="false" items="0 39 59 | 1 501 67 , 5 19 , 72 | 2 15 45 , 18 65 , 7 37 | 4 3 8 9 , 13 44 , 58 , 47 | 16 51 64 , 70 | 10 34 53 11 , 24  20 22 , 21 23 | 55 56 57 , 12 | 36 46 , 38 49  50 , 71 | 30 29 54 32 31 33 | 17 26 62 73 , 14 66 68 | 25 52 60 61 | 40 41 42 , 27 28 35 , 6" position="1" help="false" />
 	<input show="false" cmd="true" top="false" />
 	<dockBar show="false" east="false" />
 </perspective>
 	</perspectives>
 	<labelingStyle  val="0"/>
 	<font  size="12"/>
 	<graphicsSettings javaLatexFonts="false"/>
 </gui>
 <euclidianView>
 	<size  width="798" height="428"/>
 	<coordSystem xZero="29.650527865140138" yZero="388.8603806906209" scale="157.32226808054406" yscale="157.32235429650632"/>
 	<evSettings axes="true" grid="true" gridIsBold="false" pointCapturing="3" rightAngleStyle="2" checkboxSize="26" gridType="0"/>
 	<bgColor r="255" g="255" b="255"/>
 	<axesColor r="0" g="0" b="0"/>
 	<gridColor r="192" g="192" b="192"/>
 	<lineStyle axes="1" grid="10"/>
 	<axis id="0" show="true" label="" unitLabel="" tickStyle="1" showNumbers="true" positiveAxis="true"/>
 	<axis id="1" show="true" label="" unitLabel="" tickStyle="1" showNumbers="true" positiveAxis="true"/>
 </euclidianView>
 <kernel>
 	<continuous val="false"/>
 	<usePathAndRegionParameters val="true"/>
 	<decimals val="1"/>
 	<angleUnit val="degree"/>
 	<algebraStyle val="0"/>
 	<coordStyle val="0"/>
 	<angleFromInvTrig val="false"/>
 </kernel>
 <scripting blocked="false" disabled="false"/>
 <construction title="" author="" date="">
 <element type="numeric" label="a">
 	<value val="4.1"/>
 	<show object="false" label="true"/>
 	<objColor r="0" g="0" b="0" alpha="0.1"/>
 	<layer val="0"/>
 	<labelMode val="1"/>
 	<slider min="0" max="4.5" absoluteScreenLocation="true" width="200" x="30" y="90" fixed="false" horizontal="true"/>
 	<lineStyle thickness="10" type="0" typeHidden="1"/>
 	<animation step="0.1" speed="1" type="0" playing="false"/>
 </element>
 <element type="numeric" label="b">
 	<value val="0.1"/>
 	<show object="false" label="true"/>
 	<objColor r="0" g="0" b="0" alpha="0.1"/>
 	<layer val="0"/>
 	<labelMode val="1"/>
 	<slider min="0" max="2.4" absoluteScreenLocation="true" width="200" x="30" y="50" fixed="false" horizontal="true"/>
 	<lineStyle thickness="10" type="0" typeHidden="1"/>
 	<animation step="0.1" speed="1" type="0" playing="false"/>
 </element>
 <expression label="A" exp="(a, b)" type="point" />
 <element type="point" label="A">
 	<show object="false" label="true"/>
 	<objColor r="68" g="68" b="68" alpha="0"/>
 	<layer val="0"/>
 	<labelMode val="0"/>
 	<coords x="4.1" y="0.1" z="1"/>
 	<pointSize val="3"/>
 	<pointStyle val="0"/>
 </element>
 <element type="point" label="B">
 	<show object="true" label="true"/>
 	<objColor r="0" g="0" b="255" alpha="0"/>
 	<layer val="0"/>
 	<labelMode val="0"/>
 	<animation step="0.1" speed="1" type="1" playing="false"/>
 	<coords x="4.05123495809606" y="0.06267628484657041" z="1"/>
 	<pointSize val="3"/>
 	<pointStyle val="0"/>
 </element>
 <command name="Distance">
 	<input a0="A" a1="B"/>
 	<output a0="d"/>
 </command>
 <element type="numeric" label="d">
 	<value val="0.061409193324349354"/>
 	<objColor r="0" g="0" b="0" alpha="0.1"/>
 </element>
 <expression label="e" exp="d  &lt;  0.1" />
 <element type="boolean" label="e">
 	<value val="true"/>
 	<show object="false" label="true"/>
 	<objColor r="0" g="0" b="0" alpha="0"/>
 	<layer val="0"/>
 	<labelMode val="0"/>
 </element>
 </construction>
 </geogebra>
EOT;
// phpcs:enable
}
