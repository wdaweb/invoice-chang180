<?php

include_once "base.php";

// 更新資料
// UPDATE table SET xx='aa', yy='bb', zz='cc'
// UPDATE table SET xx='aa', yy='bb', zz='cc' WHERE xx='aa' && yy='bb'
// UPDATE table SET xx='aa', yy='bb', zz='cc' WHERE id='?'

$table='invoice';

$row = find($table,20);
echo "<pre>";
print_r($row);
echo "</pre>";

$row['code']='ZZ';
$row['expense']=1000;

update($table,$row);

function update($table,$arg){
    global $pdo;

    foreach($arg as $key => $val){
        if($key!='id'){
        $tmp[]=sprintf("`%s`='%s'",$key,$val);
        }
    }
    $sql="UPDATE $table SET ".implode(',',$tmp)." WHERE `id`='".$arg['id']."'";
    // echo $sql;
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

?>