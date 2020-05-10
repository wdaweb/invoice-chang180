<?php
include "./com/base.php";
// 以GET方式取得欲刪除的資料id
$id=$_GET['id'];
// echo $id;

$sql="DELETE FROM `invoice` WHERE `invoice`.`id`='$id'";

$res=$pdo->exec($sql);

if($res==1){
    header("location:list.php");
}else{
    echo "刪除失敗<br>";
}

?>

<!-- <hr>
<a href="index.php">回首頁</a>
<hr>
<a href="list.php">發票列表</a> -->