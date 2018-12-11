<?php
// Create a new image
$newCanvas = imagecreatetruecolor(200, 200);
imageantialias($newCanvas, true);

// text Settings
$text_0 = 'LogLite';
$text_1 = 'Super Simple Blog System';

// Color settings
$backgroundColor = imagecolorallocate($newCanvas, 41, 44, 52);
// green = 128, 255, 0
$arcColor = imagecolorallocate($newCanvas, 153, 255, 51);
$textColour = imagecolorallocate($newCanvas, 153, 255, 51);
$lineColor = imagecolorallocate($newCanvas, 153, 255, 51);


//bool imagestring ( resource $image , int $font , int $x , int $y , string $string , int $color )
imagestring($newCanvas, 5, 70, 75, $text_0, $textColour);
imagestring($newCanvas, 2, 30, 105, $text_1, $textColour);

//bool imagearc ( resource $image , int $cx , int $cy , int $width , int $height , int $start , int $end , int $color )
// imagesetthickness ($newCanvas, 3);
// imagearc($newCanvas, 100, 100, 190, 190,  0, 360, $arcColor);
imagesetthickness ($newCanvas, 1);
imagerectangle($newCanvas, 10, 10, 190, 190, $lineColor);

// bool imageline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )
// Line 1
imagesetthickness ($newCanvas, 1);
imageline($newCanvas, 20, 60, 180, 60, $lineColor);
// Line 2
imagesetthickness ($newCanvas, 1);
imageline($newCanvas, 20, 140, 180, 140, $lineColor);

header("Content-type: image/png");
imagepng($newCanvas);
imagecolordeallocate($lineColor);
imagecolordeallocate($textColor);
imagecolordeallocate($backgroundColor);

// Release memory
imagedestroy($newCanvas);
?>
