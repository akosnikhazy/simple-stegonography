<?php
include 'Simple.Stegonography.class.php';


$a = new Stego();

//This will put the text 'Test' in the example.png image
header('Content-Type: image/png');
imagepng($a -> stegoIt('Test','example.png',1000));

//This will get the text from example2.png
echo $a -> unStegoIt('example2.png',1000)

?>
