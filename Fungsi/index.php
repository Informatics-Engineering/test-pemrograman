<?php
$bilangan1 = array("-5","-4","5","-1","6","2");
$bilangan2 = array("1","-6","-8","0","4","2");


print_r($bilangan1);
echo "<br>";
echo "1";
echo "<br>";
print_r($bilangan2);
echo "<br>";
echo "3";

for ($x = 0; $x <= count($bilangan1); $x++) {
    if($x > 0 && $x < max($bilangan1) ){
        
        if($bilangan1[$x] != $bilangan1){
            
        }else{
            echo "<br>";
            echo $bilangan1[$x];
            echo "<br>";
        }
    }else {}
  }
?>