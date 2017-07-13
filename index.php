<?php

include("resize.php");

$resizeImg = new resize('sample.jpg');
$resizeImg->resizeImage(150, 100, 'crop');
$resizeImg->saveImage('sample-resize.gif', 100);