<?php
include("./settings.php");
include("./utils/gd.php");
include("./utils/rest.php");

header("Content-type: image/png");

// Open the layout for later use
$im = imagecreatefrompng("layout.png");

// TODO Fetch the Jeedom API

// Iterate over the Structure and map it with the API return data and write it into the image
foreach($struct as $curr){
	writeText($im, $curr['data'], $curr['x'], $curr['y'], $curr['size'], $curr['font']);
}

$rotate = imagerotate($im, 90, 0);
imagepng($rotate);

imagedestroy($rotate);
imagedestroy($im);
?>