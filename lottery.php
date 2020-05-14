<?php

function bingo($num){
$roll=[1];
$count=0;
$special=0;
while(array_diff($num,$roll)!=[]){
$roll=array_rand(range(1,49),6);
//$special = array_rand(array_diff(range(1,49),$roll));
//print_r(array_diff($num,$roll));
//$money=sort($roll);
//print_r($roll)."<br>";
//echo $special."<br>";
    $count++;
}
echo number_format($count);

}

bingo([18,17,33,42,43,46]);

?>