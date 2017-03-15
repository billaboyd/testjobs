<?php
$handle = fopen ("sample0.txt","r");

if ($handle) {
    while (($buffer = fgets($handle)) !== false) {

        $str = preg_split("/[\s\t,]+/", $buffer);

        //echo implode(" *** ",$str);

        foreach ($str as $k => $v) {
          if(!$v){ continue; }
          if(isPrimNumber(intval($v))){
              echo "$v is Prime Number<br/>";
          }else{
              echo "$v is not Prime Number<br/>";
          }
        }

    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

function isPrimNumber($inputNumber){
    for($indexDivider = 2; $indexDivider < $inputNumber; $indexDivider++){
        if($inputNumber%$indexDivider === 0){
            return false;
        }
    }
    return true;
}

?>
