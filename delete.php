<?php
include "./com/base.php";
// 以GET方式取得欲刪除的資料id
$id = $_GET['id'];
// echo $id;

$sql="DELETE FROM `invoice` WHERE `invoice`.`id`='$id'";

$res=$pdo->exec($sql);

if($res==1){
    header("location:list.php");
}else{
    echo "刪除失敗<br>";
}


// if (!empty($_GET['do'])) {
//     if ($_GET['do'] == "true") {
//         $sql = "DELETE FROM `invoice` WHERE `invoice`.`id`='$id'";
//         $pdo->exec($sql);
//         header("location:list.php");
//     } else {

//         header("location:list.php");
//     }
// }
?>
<!-- <div class="box">
    <div class="meg">確認刪除？</div>

    <a href="?do=true&id=<?= $id; ?>">確認刪除</a>
    <a href="?do=false&id=<?= $id; ?>">取消</a>
</div> -->