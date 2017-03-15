<?php
// input data form keyboard
$handle = fopen ("sample00.txt","r");
fscanf($handle,"%s",$stringInput);

print_r(swapNumber(strval($stringInput)));
// I will use this function to solve the problem instead of use strev
function swapNumber($stringInput){
    $totalLength = strlen($stringInput);

    echo $stringInput.'<br/>';

    for($i = 0; $i < floor($totalLength/2); $i++){
        $stringInput[$totalLength-$i] = $stringInput[$i];
        echo $stringInput[$i].'  -  '.($totalLength-$i).'<br/>';
        $stringInput[$i] = "";
    }

    return $stringInput;
}
?>
