<?php
// input data form keyboard
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$stringInput);
print_r(swapNumber(strval($stringInput)));
// I will use this function to solve the problem instead of use strev 
function swapNumber($stringInput){
    $totalLength = strlen($stringInput);
    for($i = 0; $i < floor($totalLength/2); $i++){
        $stringInput[$totalLength-$i] = $stringInput[$i];
        $stringInput[$i] = "";
    }
    return $stringInput;
}
?>