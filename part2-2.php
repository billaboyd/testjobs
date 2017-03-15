<?php
// input data form keyboard
$handle = fopen ("sample.txt","r");

if ($handle) {
    while (($buffer = fgets($handle)) !== false) {

        $str = preg_split("/[\s\t,]+/", $buffer);
        //echo implode(" *** ",$str);

        foreach ($str as $k => $v) {
          if(!$v){ continue; }
          $counter = 0;
          $stringInput = preg_replace('/[^A-Za-z0-9\-]/', '', $v);
          if(checkIsPalindrome(strtolower($stringInput), $counter)){
              echo "\"$stringInput\" is palindrome string at lenght = $counter!<br/>";
          }else{
              echo "\"$stringInput\" is not palindrome string **<br/>";
          }
        }

    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

function checkIsPalindrome($inputString, &$counter){
    $stringTotalLength = strlen($inputString);
    $isPalidrome = false;
    $isPalidrome = ($inputString  === strrev($inputString));
    $counter = $stringTotalLength;
    /*if($stringTotalLength == 1 || $stringTotalLength == 3){
        $isPalidrome = ($inputString  === strrev($inputString));
        $counter = $stringTotalLength;
    }else{
        $haftLength = floor($stringTotalLength /2);
        for($i = 0; $i <  $haftLength; $i++) {
            $nextHalftCharString = $inputString[$stringTotalLength-$i-1];
            //echo $inputString[$i]. " ". $nextHalftCharString;
            if ($inputString[$i] === $nextHalftCharString){
                $isPalidrome |= true;
                $counter ++;
                // echo "true"." \n";
            }
        }
    }*/
    return $isPalidrome;
}
?>
