<?php
include_once "base.php";

// 新增資料

// INSERT INTO table (`field1`,`field2`,`field`) VALUES ('value1', 'value2', 'value3')

$data = [
    "code" => "AC",
    "number" => "011FD335",
    "period" => 4,
    "expense" => 320,
    "year" => "2020"
];
$table = 'invoice';

echo insert($table, $data);

function insert($table, $arg)
{
    global $pdo;
    // $sql = "INSERT INTO ";

    // 這些是完全自己做，不使用函式的方式：
    // foreach ($arg as $key => $value) {
    //     $tmpK[] = $key;
    //     $tmpV[] = $value;
    // }
    // $str1 = "(`" . implode("`,`", $tmpK) . "`)";
    // $str2 = "('" . implode("','", $tmpV) . "')";
    // $sql = $sql . $table . $str1 . " values" . $str2;

    // $tmpK=array_keys($arg); 可直接放入$sql
    // $tmpV=array_values($arg); 根本不需要使用，因為鍵名沒用到

    $sql="INSERT INTO ".$table."(`".implode("`,`", array_keys($arg))."`) VALUES ('".implode("','",$arg)."')";
    // echo $sql;

    return $pdo->exec($sql);
}
