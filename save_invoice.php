<?php
include "./com/base.php";


$sql= "INSERT INTO invoice (`period`,`year`,`code`,`number`,`expense`) VALUES ('".$_POST['period']."','".$_POST['year']."','".$_POST['code']."','".$_POST['number']."','".$_POST['expense']."')";

echo "period=",$_POST['period'],"<br>";
echo "year=",$_POST['year'],"<br>";
echo "code=",$_POST['code'],"<br>";
echo "number=",$_POST['number'],"<br>";
echo "expense=",$_POST['expense'],"<br>";

echo $sql;
$res=$pdo->exec($sql);

if($res==1){
    echo "新增成功";
}else{
    echo "新增失敗";
}

?>