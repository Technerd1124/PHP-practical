<html>
<head>
<title> Practical 7 </title>
</head>
<body>

  <?php
    header("Content-Type: image/png"); // This must be at the top before output

    $img = imagecreate(500, 300);
    $bgcolor = imagecolorallocate($img, 0, 200, 0);
    $fontcolor = imagecolorallocate($img, 120, 60, 200);

    imagestring($img, 12, 150, 120, "Demo Text1", $fontcolor);
    imagestring($img, 12, 150, 100, "Demo Text2", $fontcolor);
    imagestring($img, 12, 150, 80, "Demo Text3", $fontcolor);
    imagestring($img, 12, 150, 60, "Demo Text4", $fontcolor);

    imagepng($img);
    imagedestroy($img);

?>
</body>
</html>
