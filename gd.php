<?php
header("Content-Type:image/jpeg");
$image = imagecreatefromjpeg("certificate.jpg");
$text_clr = imagecolorallocate($image,0,0,0);
$font = getcwd()."/ANTQUAB.TTF";
$text = "Pramod Jha";

// parameter : 1. createdImage 2. Font size; 3. Angle; 4. x-distance; 5. y-distance
imagettftext($image,40,0,590,460,$text_clr,$font,$text);
imagettftext($image,30,0,155,640,$text_clr,$font,"2022");

imagejpeg($image);
imagedestroy($image);

?>