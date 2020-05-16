<?php
include "base.php";

$total = nums('invoice');
echo "<hr>";
echo $total;
echo "<hr>";


$total = nums('invoice',["period"=>1]);
echo "<hr>";
echo $total;
echo "<hr>";

$total = nums('invoice',"","GROUP BY year");
echo "<hr>";
echo $total;

// 計算筆數，使用SQL語法查詢筆數非常快
// SELECT COUNT(*) FROM table WHERE xx='yy' && zz='aa';
// SELECT COUNT(*) FROM table WHERE;

function nums($table,...$arg){
    global $pdo;
    
    $sql="SELECT COUNT(*) FROM $table ";

    // 若第二個之後的參數存在
    if(isset($arg[0]) && is_array($arg[0])){
        $tmp=[];
        foreach($arg[0] as $key => $value){
            // $tmp=$tmp."`".$key."`='".$value."'";
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
// echo "sprintf:<br>";
// print_r($tmp);

        $sql=$sql." WHERE " . implode(" && ",$tmp);
    }

    // 第三個參數存在時，將條件加入查詢語法，不判斷資料型態，使用時自己注意
    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
    // echo $sql;
    return $pdo->query($sql)->fetchColumn();

}
