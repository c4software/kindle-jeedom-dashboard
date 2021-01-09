<?php

$FONT_REGULAR = 'font/OpenSans-Regular.ttf';

function writeText($im, $text, $x, $y, $size, $font) {
	$color = imagecolorallocate($im, 0, 0, 0);
	imagettftext($im, $size, 0, $x, $y + $size, $color, $font, $text);
}

?>
