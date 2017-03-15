<?php
// input data from keyboard
$handle       = fopen ("sample.txt","r");
$stringInput  = fgets($handle);
fclose($handle);
$returnString = '';
// Check string not null
if($stringInput !== ""){
    $explodeString = explode(" ", $stringInput);
    // Reverse each word
    foreach($explodeString as $subString){
        $returnString .= strrev($subString) . " ";
    }
    print_r($returnString);
}
?>
