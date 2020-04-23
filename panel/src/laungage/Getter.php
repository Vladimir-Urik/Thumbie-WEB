<?php
function getData($lang, $word){
    $myFile = $lang +".php";
    $fh = fopen($myFile, $word);
    $theData = fgets($fh);
    fclose($fh);
    return $theData;
}