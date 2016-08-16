<?php

class com_wiris_quizzes_impl_HTMLToolsUnitTests {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$this->h = new com_wiris_quizzes_impl_HTMLTools();
	}}
	public function implode($a, $tok) {
		$sb = new StringBuf();
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($i1 > 0) {
					$sb->add($tok);
				}
				$sb->add($a[$i1]);
				unset($i1);
			}
		}
		return $sb->b;
	}
	public function unitTestTables() {
		$variables = new Hash();
		$t = new Hash();
		$t->set("T", "{1,2,3,4}");
		$t->set("M", "{a,b,c,d}");
		$t->set("r", "10");
		$t->set("x", "{{a,b},{c,d}}");
		$t->set("y", "[[1,2,3],[4,5,6]]");
		$t->set("z", "{{i,j}}");
		$t->set("w", "{i,j}");
		$variables->set(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT, $t);
		$m = new Hash();
		$m->set("a", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced open=\"[\" close=\"]\"><mrow><mn>1</mn><mo>,</mo><mn>2</mn><mo>,</mo><mn>3</mn></mrow></mfenced></math>");
		$m->set("b", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced open=\"{\" close=\"}\"><mrow><mfenced open=\"{\" close=\"}\"><mrow><mn>1</mn><mo>,</mo><mn>1</mn></mrow></mfenced><mo>,</mo><mfenced open=\"{\" close=\"}\"><mrow><mn>2</mn><mo>,</mo><mn>4</mn></mrow></mfenced><mo>,</mo><mfenced open=\"{\" close=\"}\"><mrow><mn>3</mn><mo>,</mo><mn>9</mn></mrow></mfenced></mrow></mfenced></math>");
		$m->set("G", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced><mtable><mtr><mtd><mn>1</mn></mtd><mtd><mn>0</mn></mtd></mtr><mtr><mtd><mn>0</mn></mtd><mtd><mn>1</mn></mtd></mtr></mtable></mfenced></math>");
		$m->set("X", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced open=\"{\" close=\"}\"><mrow><mfenced open=\"{\" close=\"}\"><mrow><mn>1</mn><mo>,</mo><mn>2</mn></mrow></mfenced><mo>,</mo><mfenced open=\"{\" close=\"}\"><mrow><mn>3</mn><mo>,</mo><mn>4</mn></mrow></mfenced></mrow></mfenced></math>");
		$variables->set(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML, $m);
		$html = new _hx_array(array("<table><tr><td></table>", "<div><table class=\"table\"><tr class=\"tr1\"><td class=\"td1\">Header</td></tr><tr class=\"tr2\"><td class=\"td2\">#M</td></tr></table>", "<div><table><thead><tr><th>Name</th><th>Value</th></tr></thead><tbody><tr><td>#M</td><td>#T</td></tr></tbody></table></div>", "<div><table><thead><tr><td>Label:</td><td>#M</td><td></td></tr></thead><tbody><tr><td>Value:</td><td>#T</td><td>#r</td></tr></tbody></table></div>", "<div><table><tr><td>#T</td></tr></table></div>", "<div><table><tr><td>Values:</td><td>#T</td><td>#r</td></tr></table></div>", "", "<table><tr></tr></table>", "<table><tr><td>#a</td></tr></table>", "<table><tr><th>title</th></tr><tr><td>#b</td></tr></table>", "<table><tr><td>#x</td><td>#y</td></tr></table>", "<table><tr><td>#x</td><td></td><td>#y</td><td> &nbsp; </td><td>  &#xa0;</td></tr></table>", "<table><tr><td>#x</td></tr> <tr><td></td></tr> <tr><td>#z</td></tr></table>", "<table><tr><td>#w</td><td>#x</td><td></td></tr> <tr><td></td><td></td><td></td></tr></table>", "<table><thead><tr><th>A</th><th>B</th></tr></thead><tbody><tr><td>#G</td><td> </td></tr></tbody></table>", "<table><tbody><tr><td>A</td><td>#X</td></tr><tr><td>B</td><td></td></tr></tbody></table>"));
		$res = new _hx_array(array("<table><tr><td></table>", "<div><table class=\"table\"><tr class=\"tr1\"><td class=\"td1\">Header</td></tr><tr class=\"tr2\"><td class=\"td2\">a</td></tr><tr class=\"tr2\"><td class=\"td2\">b</td></tr><tr class=\"tr2\"><td class=\"td2\">c</td></tr><tr class=\"tr2\"><td class=\"td2\">d</td></tr></table>", "<div><table class=\"wiristable\"><thead><tr><th>Name</th><th>Value</th></tr></thead><tbody><tr><td>a</td><td>1</td></tr><tr><td>b</td><td>2</td></tr><tr><td>c</td><td>3</td></tr><tr><td>d</td><td>4</td></tr></tbody></table></div>", "<div><table class=\"wiristable\"><thead><tr><td>Label:</td><td>a</td><td>b</td><td>c</td><td>d</td><td></td></tr></thead><tbody><tr><td>Value:</td><td>1</td><td>2</td><td>3</td><td>4</td><td>#r</td></tr></tbody></table></div>", "<div><table class=\"wiristable\"><tr><td>1</td><td>2</td><td>3</td><td>4</td></tr></table></div>", "<div><table class=\"wiristable\"><tr><td>Values:</td><td>1</td><td>2</td><td>3</td><td>4</td><td>#r</td></tr></table></div>", "", "<table><tr></tr></table>", "<table class=\"wiristable\"><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>1</mn></math></td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn></math></td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn></math></td></tr></table>", "<table class=\"wiristable\"><tr><th>title</th></tr><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced open=\"{\" close=\"}\"><mrow><mn>1</mn><mo>,</mo><mn>1</mn></mrow></mfenced></math></td></tr><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced open=\"{\" close=\"}\"><mrow><mn>2</mn><mo>,</mo><mn>4</mn></mrow></mfenced></math></td></tr><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced open=\"{\" close=\"}\"><mrow><mn>3</mn><mo>,</mo><mn>9</mn></mrow></mfenced></math></td></tr></table>", "<table class=\"wiristable\"><tr><td>a</td><td>b</td><td>1</td><td>2</td><td>3</td></tr><tr><td>c</td><td>d</td><td>4</td><td>5</td><td>6</td></tr></table>", "<table class=\"wiristable\"><tr><td>a</td><td>b</td><td>1</td><td>2</td><td>3</td></tr><tr><td>c</td><td>d</td><td>4</td><td>5</td><td>6</td></tr></table>", "<table class=\"wiristable\"><tr><td>a</td><td>b</td></tr> <tr><td>c</td><td>d</td></tr> <tr><td>i</td><td>j</td></tr></table>", "<table class=\"wiristable\"><tr><td>i</td><td>a</td><td>b</td></tr> <tr><td>j</td><td>c</td><td>d</td></tr></table>", "<table class=\"wiristable\"><thead><tr><th>A</th><th>B</th></tr></thead><tbody><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>1</mn></math></td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>0</mn></math></td></tr><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>0</mn></math></td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>1</mn></math></td></tr></tbody></table>", "<table class=\"wiristable\"><tbody><tr><td>A</td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>1</mn></math></td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn></math></td></tr><tr><td>B</td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn></math></td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>4</mn></math></td></tr></tbody></table>"));
		$i = null;
		{
			$_g1 = 0; $_g = $html->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$computed = $this->h->replaceVariablesInsideHTMLTables($html[$i1], $variables);
				if(!($computed === $res[$i1])) {
					throw new HException("Failed table test " . _hx_string_rec($i1, "") . ".\x0A" . "Expected: " . $res[$i1] . "\x0A" . "Computed: " . $computed);
				}
				unset($i1,$computed);
			}
		}
	}
	public function unitTestVariableNames() {
		$html = new _hx_array(array("<math><mi>#a1</mi></math>", "<p>Calcular la corriente que circula por el condensador D del circuito adjunto. Los valores de los compenentes son: A = #A Ω;  B = #B Ω;  C = #C Ω;  D = #D Ω.</p>\x0A" . "<p><img src=\"@@PLUGINFILE@@/Circuito1.gif\" alt=\"\" width=\"424\" height=\"170\" /></p> <p>#x</p> <p>#x1</p> <p>#x2</p> <p>#x3</p> ", "<span style=\"color: #aaffaa;\">&#x32;#x_11</span>", "123 #a<ol>\x0A" . "<li><span style=\"background-color: #ffff00; font-family: 'times new roman', times, serif;\">Use inverse operations to undo Addition and Subtraction (add and/or subtract all terms from left to right)</span></li>\x0A" . "<li><span style=\"background-color: #ffff00; font-family: 'times new roman', times, serif;\">Use inverse operations to undo Multiplication and Division (multiply and/or divide all factors from left to right)</span></li>\x0A" . "</ol>", "ΩΩΩΩΩΩΩ<div>ΩΩΩ<p>ΩΩ#aΩΩ</p>ΩΩΩ</div>ΩΩΩΩΩΩΩ", "<math><mlongdiv longdivstyle=\"shortstackedrightright\" charalign=\"center\" charspacing=\"0px\" stackalign=\"left\"><mrow><mo>#</mo><mi>d</mi></mrow><mrow><mo>#</mo><mi>q</mi></mrow><msgroup><msrow><mo>#</mo><mi>n</mi></msrow></msgroup></mlongdiv></math>"));
		$vars = new _hx_array(array(new _hx_array(array("a1")), new _hx_array(array("A", "B", "C", "D", "x", "x1", "x2", "x3")), new _hx_array(array("x_11")), new _hx_array(array("a")), new _hx_array(array("aΩΩ")), new _hx_array(array("d", "n", "q"))));
		$i = null;
		{
			$_g1 = 0; $_g = $html->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$v = $this->h->extractVariableNames($html[$i1]);
				$a1 = $this->implode($vars[$i1], ", ");
				$a2 = $this->implode($v, ", ");
				if(!($a1 === $a2)) {
					throw new HException("Expected: " . $a1 . ". Found: " . $a2 . ".");
				}
				unset($v,$i1,$a2,$a1);
			}
		}
	}
	public function unitTestMathMLToText() {
		$mathml = new _hx_array(array("<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>sin</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>+</mo><mn>1</mn></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#</mo><mi>F</mi><mo>+</mo><mi>C</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><mo>.</mo><mn>0</mn><mo>·</mo><mi>x</mi><mi>y</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"normal\">sin</mi><mi>x</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfenced><mrow><mn>1</mn><mo>,</mo><mn>0</mn></mrow></mfenced></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>3</mn></mfrac></math>", "<math><mfenced open=\"|\" close = \"|\"><mtable><mtr><mtd><mn>1</mn></mtd><mtd><mn>0</mn></mtd></mtr><mtr><mtd><mn>0</mn></mtd><mtd><mn>1</mn></mtd></mtr></mtable></mfenced></math>", "<math><mfenced><mtable><mtr><mtd><mn>1</mn></mtd><mtd><mn>0</mn></mtd></mtr><mtr><mtd><mn>0</mn></mtd><mtd><mn>1</mn></mtd></mtr></mtable></mfenced></math>", "<math><msqrt><mn>2</mn></msqrt><mo>+</mo><mroot><mi>x</mi><mn>3</mn></mroot></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>α</mi><mo>+</mo><mn>1</mn></math>"));
		$responses = new _hx_array(array("sin(x)+1", "#F+C", "2.0·xy", "sinx", "(1,0)", "1/3", "|((1,0),(0,1))|", "((1,0),(0,1))", "sqrt(2)+root(x,3)", "α+1"));
		$i = null;
		{
			$_g1 = 0; $_g = $mathml->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$res = $this->h->mathMLToText($mathml[$i1]);
				if(!($res === $responses[$i1])) {
					throw new HException("Expected: '" . $responses[$i1] . "' but got: '" . $res . "'.");
				}
				unset($res,$i1);
			}
		}
	}
	public function unitTestTextToMathML() {
		$texts = new _hx_array(array("sin(x)+1", "#F +C", "2.0·xy", "x<3", "\x0A" . " #resposta\x0A" . "  "));
		$responses = new _hx_array(array("<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>sin</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>+</mo><mn>1</mn></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#</mo><mi>F</mi><mo> </mo><mo>+</mo><mi>C</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><mo>.</mo><mn>0</mn><mo>·</mo><mi>x</mi><mi>y</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>&lt;</mo><mn>3</mn></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>\x0A" . "</mo><mo> </mo><mo>#</mo><mi>r</mi><mi>e</mi><mi>s</mi><mi>p</mi><mi>o</mi><mi>s</mi><mi>t</mi><mi>a</mi><mo>\x0A" . "</mo><mo> </mo><mo> </mo></math>"));
		$i = null;
		{
			$_g1 = 0; $_g = $texts->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$res = $this->h->textToMathML($texts[$i1]);
				if(!($res === $responses[$i1])) {
					throw new HException("Expected: '" . $responses[$i1] . "' but got: '" . $res . "'.");
				}
				unset($res,$i1);
			}
		}
	}
	public function unitTestReplaceVariablesInHTML() {
		$texts = new _hx_array(array("<p>«math xmlns=¨http://www.w3.org/1998/Math/MathML¨»«mo mathcolor=¨#FF0000¨»#«/mo»«mi mathcolor=¨#FF0000¨»a«/mi»«mo mathcolor=¨#FF0000¨»+«/mo»«mn mathcolor=¨#FF0000¨»3«/mn»«/math»</p>", "<math><mi>#a1</mi></math>", "<math><mo>#</mo><mi>a</mi><mn>1</mn></math>", "<p><img align=\"middle\" src=\"http://localhost/moodle21/lib/editor/tinymce/tiny_mce/3.4.2/plugins/tiny_mce_wiris/integration/showimage.php?formula=cb550f21cbc30fac59e4f2bba550693d.png\" /> + #dif</p>", "a  «math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;»«mfrac»«mrow»«mi»#«/mi»«mi»a«/mi»«mo»+«/mo»«mn»1«/mn»«/mrow»«mrow»«mi»#«/mi»«mi»b«/mi»«mo»-«/mo»«mn»1«/mn»«/mrow»«/mfrac»«/math» a", "<p>#a&#xa1;<script type=\"text/javascript\"> <!-- #a1 will be replaced by wiris quizzes --> <![CDATA[ a = #a1; ]]> </script> <select><option>#a</option><option>#a1</option></select></p>", "<math><mo>#</mo><mi>a</mi><mn>0</mn></math>", "<p><img align=\"middle\" alt=\"# alpha\" class=\"Wirisformula\" data-mathml=\"«math xmlns=¨http://www.w3.org/1998/Math/MathML¨»«mo»#«/mo»«mi»§#945;«/mi»«/math»\" height=\"13\" src=\"/pluginwiris_engine/app/showimage?formula=4f52b56f431aac53cad4c548ef47e646&amp;cw=26&amp;ch=13&amp;cb=12\" style=\"vertical-align: -1px;\" width=\"26\" />&nbsp;i #&alpha;.</p>"));
		$mml = new Hash();
		$mml->set("dif", "<math><mn>0</mn></math>");
		$mml->set("a", "<math><mi>x</mi></math>");
		$mml->set("b", "<math><mi>y</mi></math>");
		$mml->set("a1", "<math><mi>z</mi></math>");
		$mml->set("α", "<math><mn>2</mn></math>");
		$txt = new Hash();
		$txt->set("dif", "0");
		$txt->set("a", "x");
		$txt->set("b", "y");
		$txt->set("a1", "z");
		$txt->set("α", "2");
		$v = new Hash();
		$v->set(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML, $mml);
		$v->set(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT, $txt);
		$responses = new _hx_array(array("<p>«math xmlns=¨http://www.w3.org/1998/Math/MathML¨»«mstyle mathcolor=¨#FF0000¨»«mrow»«mi»x«/mi»«/mrow»«/mstyle»«mo mathcolor=¨#FF0000¨»+«/mo»«mn mathcolor=¨#FF0000¨»3«/mn»«/math»</p>", "<math><mrow><mi>z</mi></mrow></math>", "<math><mrow><mi>z</mi></mrow></math>", "<p><img align=\"middle\" src=\"http://localhost/moodle21/lib/editor/tinymce/tiny_mce/3.4.2/plugins/tiny_mce_wiris/integration/showimage.php?formula=cb550f21cbc30fac59e4f2bba550693d.png\" /> + <math><mn>0</mn></math></p>", "a  «math xmlns=¨http://www.w3.org/1998/Math/MathML¨»«mfrac»«mrow»«mrow»«mi»x«/mi»«/mrow»«mo»+«/mo»«mn»1«/mn»«/mrow»«mrow»«mrow»«mi»y«/mi»«/mrow»«mo»-«/mo»«mn»1«/mn»«/mrow»«/mfrac»«/math» a", "<p><math><mi>x</mi></math>¡<script type=\"text/javascript\"> <!-- #a1 will be replaced by wiris quizzes --> <![CDATA[ a = z; ]]> </script> <select><option>x</option><option>z</option></select></p>", "<math><mrow><mrow><mi>x</mi></mrow><mo>0</mo></mrow></math>", "<p><img align=\"middle\" alt=\"# alpha\" class=\"Wirisformula\" data-mathml=\"«math xmlns=¨http://www.w3.org/1998/Math/MathML¨»«mrow»«mn»2«/mn»«/mrow»«/math»\" height=\"13\" src=\"/pluginwiris_engine/app/showimage?formula=4f52b56f431aac53cad4c548ef47e646&amp;cw=26&amp;ch=13&amp;cb=12\" style=\"vertical-align: -1px;\" width=\"26\" /> i «math»«mn»2«/mn»«/math».</p>"));
		$i = null;
		{
			$_g1 = 0; $_g = $texts->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$res = $this->h->expandVariables($texts[$i1], $v);
				if(!($res === $responses[$i1])) {
					throw new HException("Expected: '" . $responses[$i1] . "' but got: '" . $res . "'.");
				}
				unset($res,$i1);
			}
		}
	}
	public function unitTestExtractText() {
		$inputs = new _hx_array(array("<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mrow><mtext>Cap de les altres</mtext></mrow></math>", "<math><mrow><mtext>La resposta és </mtext><mfrac><mfrac><mn>1</mn><mn>2</mn></mfrac><mi>x</mi></mfrac><mtext>.</mtext></mrow></math>", "<math><mrow><mo>(</mo><mtext>tiruliru</mtext><mo>)</mo></mrow></math>", "<math><mrow><msqrt><mtext>radicand</mtext></msqrt></mrow></math>", "<math><mtext>&#xa0;a&#xa0;b&#xa0;</mtext></math>", "<math><mtext>&#xa0;</mtext></math>"));
		$outputs = new _hx_array(array("Cap de les altres", "La resposta és <math><mrow><mfrac><mfrac><mn>1</mn><mn>2</mn></mfrac><mi>x</mi></mfrac></mrow></math>.", "<math><mrow><mo>(</mo></mrow></math>tiruliru<math><mrow><mo>)</mo></mrow></math>", "<math><mrow><msqrt><mtext>radicand</mtext></msqrt></mrow></math>", " a b ", " "));
		$i = null;
		{
			$_g1 = 0; $_g = $inputs->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$coutput = $this->h->extractTextFromMathML($inputs[$i1]);
				if(!($coutput === $outputs[$i1])) {
					throw new HException("Expected: '" . $outputs[$i1] . "' but got: '" . $coutput . "'.");
				}
				unset($i1,$coutput);
			}
		}
	}
	public function unitTestPrepareFormulasAlgorithm() {
		$tests = new _hx_array(array("<math><mo>#</mo><mi>v</mi><mi>a</mi><mi>r</mi><mo>_</mo><mi>k</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#</mo><mi>a</mi><mo>&#160;</mo><mo>+</mo><mo>#</mo><mi>b</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mi>#</mi><mi>p</mi></math>", "<math><mrow><mi>#</mi><mi>f</mi></mrow></math>", "<math><mrow><mi>#</mi><msup><mi>f</mi><mn>2</mn></msup></mrow></math>", "<math><mrow><msqrt><mrow><mn>2</mn><msqrt><mn>3</mn></msqrt></mrow></msqrt><mi>#</mi><mi>a</mi></mrow></math>", "<math><mrow><msub><mi>#</mi><mi>a</mi></msub></mrow></math>", "<math><mrow><mi>#</mi><msub><mi>a</mi><mi>c</mi></msub></mrow></math>", "<math><mrow><msqrt><mrow><mi>#</mi><mi>f</mi><mi>u</mi><mi>n</mi><mi>c</mi></mrow></msqrt></mrow></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>&#8594;</mo><mn>0</mn></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>#</mo><mi>a</mi><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mo>#</mo><mi>b</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#</mo><mi>α</mi></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo mathcolor=\"#FF0000\">#</mo><mi mathcolor=\"#FF0000\">a</mi><mo mathcolor=\"#FF0000\">+</mo><mn mathcolor=\"#FF0000\">3</mn></math>"));
		$responses = new _hx_array(array("<math><mo>#var_k</mo></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#a</mo><mo>&#160;</mo><mo>+</mo><mo>#b</mo></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mi>#p</mi></math>", "<math><mrow><mi>#f</mi></mrow></math>", "<math><mrow><msup><mi>#f</mi><mn>2</mn></msup></mrow></math>", "<math><mrow><msqrt><mrow><mn>2</mn><msqrt><mn>3</mn></msqrt></mrow></msqrt><mi>#a</mi></mrow></math>", "<math><mrow><msub><mi>#</mi><mi>a</mi></msub></mrow></math>", "<math><mrow><msub><mi>#a</mi><mi>c</mi></msub></mrow></math>", "<math><mrow><msqrt><mrow><mi>#func</mi></mrow></msqrt></mrow></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>&#8594;</mo><mn>0</mn></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>#a</mo><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mo>#b</mo></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#α</mo></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo mathcolor=\"#FF0000\">#a</mo><mo mathcolor=\"#FF0000\">+</mo><mn mathcolor=\"#FF0000\">3</mn></math>"));
		$i = null;
		{
			$_g1 = 0; $_g = $tests->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$res = $this->h->prepareFormulas($tests[$i1]);
				if(!($res === $responses[$i1])) {
					throw new HException("Expected: '" . $responses[$i1] . "' but got: '" . $res . "'.");
				}
				unset($res,$i1);
			}
		}
	}
	public function unitTestConvertEditor2Newlines() {
		$tests = new _hx_array(array("<mtable columnalign=\"left\" rowspacing=\"0\"><mtr><mtd><mfenced><mtable><mtr><mtd><mn>1</mn></mtd><mtd><mn>2</mn></mtd></mtr><mtr><mtd><mtable><mtr><mtd><mi>a</mi></mtd><mtd><mi>b</mi></mtd></mtr></mtable></mtd><mtd><mn>2</mn></mtd></mtr></mtable></mfenced></mtd></mtr><mtr><mtd><mtable><mtr><mtd><mn>1</mn></mtd><mtd><mn>2</mn></mtd></mtr></mtable></mtd></mtr></mtable>"));
		$res = new _hx_array(array("<math><mfenced><mtable><mtr><mtd><mn>1</mn></mtd><mtd><mn>2</mn></mtd></mtr><mtr><mtd><mtable><mtr><mtd><mi>a</mi></mtd><mtd><mi>b</mi></mtd></mtr></mtable></mtd><mtd><mn>2</mn></mtd></mtr></mtable></mfenced><mspace linebreak=\"newline\"/><mtable><mtr><mtd><mn>1</mn></mtd><mtd><mn>2</mn></mtd></mtr></mtable></math>"));
		$i = null;
		{
			$_g1 = 0; $_g = $tests->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$u = com_wiris_quizzes_impl_HTMLTools::convertEditor2Newlines($tests[$i1]);
				if(!($u === $res[$i1])) {
					throw new HException("Expected: " . $res[$i1] . ". Got: " . $u . ".");
				}
				unset($u,$i1);
			}
		}
	}
	public function unitTestUpdateReservedWords() {
		$tests = new _hx_array(array("<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>3</mn></msup><msup><mi>y</mi><mn>2</mn></msup></math>", "<math><semantics><mrow><mn>6</mn><mi>k</mi><mi>m</mi><mo>+</mo><mn>4</mn><mi>k</mi><mi>m</mi></mrow><annotation encoding=\"application/json\">[[[18,9],...,[4,27]]]</annotation></semantics></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mrow><mn>4</mn><mo>.</mo><mn>1</mn><mo>&#xD7;</mo><mn>1</mn><msup><mn>0</mn><mrow><mo>-</mo><mn>4</mn></mrow></msup></mrow></math>", "<math><mi>s</mi><mi>i</mi><mi>n</mi><mi>s</mi><mi>i</mi><mi>n</mi></math>", "<math><mi>s</mi><mi>i</mi><mi>n</mi><mn>1</mn><mi>s</mi><mi>i</mi><mi>n</mi></math>", "<math><msup><mrow><mi>s</mi><mi>i</mi><msup><mi>n</mi><mi>k</mi></msup></mrow><mi>n</mi></msup></math>", "<math><mi>s</mi><msup><mi>i</mi><mn>1</mn></msup><mi>s</mi><msup><mi>i</mi><mn>1</mn></msup></math>", "<math><mi>s</mi><mrow><mi>i</mi><mi>m</mi><mi>x</mi></mrow></math>", "<math><mi>si</mi><mi>n</mi><mi>x</mi></math>", "<math><mn>2</mn><mi>k</mi><mi>m</mi></math>", "<math><mn>2</mn><mi>k</mi><mo>&nbsp;</mo><mi>m</mi></math>", "<math><mn>5</mn><mi>k</mi><msup><mi>m</mi><mn>2</mn></msup></math>"));
		$words = new _hx_array(array("s", "si", "sin", "m", "km"));
		$res = new _hx_array(array("<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>3</mn></msup><msup><mi>y</mi><mn>2</mn></msup></math>", "<math><semantics><mrow><mn>6</mn><mi>km</mi><mo>+</mo><mn>4</mn><mi>km</mi></mrow><annotation encoding=\"application/json\">[[[18,9],...,[4,27]]]</annotation></semantics></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>4</mn><mo>.</mo><mn>1</mn><mo>&#xD7;</mo><msup><mn>10</mn><mrow><mo>-</mo><mn>4</mn></mrow></msup></math>", "<math><mi>sin</mi><mi>sin</mi></math>", "<math><mi>sin</mi><mn>1</mn><mi>sin</mi></math>", "<math><msup><msup><mi>sin</mi><mi>k</mi></msup><mi>n</mi></msup></math>", "<math><msup><mi>si</mi><mn>1</mn></msup><msup><mi>si</mi><mn>1</mn></msup></math>", "<math><mi>si</mi><mi mathvariant=\"normal\">m</mi><mi>x</mi></math>", "<math><mi>sin</mi><mi>x</mi></math>", "<math><mn>2</mn><mi>km</mi></math>", "<math><mn>2</mn><mi>k</mi><mo>&#xA0;</mo><mi mathvariant=\"normal\">m</mi></math>", "<math><mn>5</mn><msup><mi>km</mi><mn>2</mn></msup></math>"));
		$i = null;
		{
			$_g1 = 0; $_g = $tests->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$u = $this->h->updateReservedWords($tests[$i1], $words);
				if(!($u === $res[$i1])) {
					throw new HException("Expected: " . $res[$i1] . ". Got: " . $u . ".");
				}
				unset($u,$i1);
			}
		}
	}
	public function unitTestDev() {
	}
	public function run() {
		$this->unitTestUpdateReservedWords();
		$this->unitTestReplaceVariablesInHTML();
		$this->unitTestVariableNames();
		$this->unitTestConvertEditor2Newlines();
		$this->unitTestExtractText();
		$this->unitTestTextToMathML();
		$this->unitTestPrepareFormulasAlgorithm();
		$this->unitTestMathMLToText();
		$this->unitTestTables();
	}
	public $h;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->�dynamics[$m]) && is_callable($this->�dynamics[$m]))
			return call_user_func_array($this->�dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call �'.$m.'�');
	}
	static function main() {
		$t = new com_wiris_quizzes_impl_HTMLToolsUnitTests();
		$t->run();
	}
	function __toString() { return 'com.wiris.quizzes.impl.HTMLToolsUnitTests'; }
}
