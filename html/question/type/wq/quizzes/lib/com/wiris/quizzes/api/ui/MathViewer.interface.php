<?php

interface com_wiris_quizzes_api_ui_MathViewer {
	function filterConstructions($root);
	function filterMathML($root);
	function filter($root);
	function plot($construction);
	function render($mathml);
}
