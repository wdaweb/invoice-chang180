<?php

include_once "base.php";

$data = [
    "code" => "AD",
    "number" => "01876335",
    "period" => 3,
    "expense" => 330,
    "year" => "2020",
    "id" => "20"
];
$table = 'invoice';

//save('invoice',$data);

$row=find('invoice',14);
$row['code']='EN';
$row['period']='1';
$row['number']='45684583';

save($table,$row);


function save($table, $arg)
{
    global $pdo;
    if (isset($arg['id'])) {
        //update
        foreach ($arg as $key => $val) {
            if ($key != 'id') {
                $tmp[] = sprintf("`%s`='%s'", $key, $val);
            }
        }
        $sql = "UPDATE $table SET " . implode(',', $tmp) . " WHERE `id`='" . $arg['id'] . "'";
    } else {
        //insert
        $sql = "INSERT INTO " . $table . "(`" . implode("`,`", array_keys($arg)) . "`) VALUES ('" . implode("','", $arg) . "')";
    }
    echo $sql;
    return $pdo->exec($sql);
}

function find($table,$id){
    global $pdo;
    $sql="SELECT * FROM $table WHERE `id`='$id'";
    // fetch沒設定時會包含欄位名稱及欄位索引值
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    if(empty($row)){
        return "無符合資料的內容<br>";
    }
    return $row;
}