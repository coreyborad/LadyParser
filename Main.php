<?php
require __DIR__ . '/_composer/vendor/autoload.php';
use \Core\Parser AS Parser;
//Obj
$PttParser = new Parser\Ptt\Main();
$total_image_url = $PttParser->_Start();
//****** Write to json ******/
$fp = fopen(__DIR__.'/img_result.json', 'w');
fwrite($fp, json_encode($total_image_url));
fclose($fp);
