<?php


header("Content-Type: image/png");

$img = imagecreate(500, 300);
$bgcolor = imagecolorallocate($img, 0, 200,0);
$fontcolor = imagecolorallocate($img, 120, 60, 200);

// Use a valid font size (Max: 5)
imagestring($img, 5, 150, 120, "Demo Text1", $fontcolor);
imagestring($img, 5, 150, 100, "Demo Text2", $fontcolor);
imagestring($img, 5, 150, 80, "Demo Text3", $fontcolor);
imagestring($img, 5, 150, 60, "Demo Text4", $fontcolor);

imagepng($img);
imagedestroy($img);
?>
