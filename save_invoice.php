<?php
include "./com/base.php";

//獎號頭2碼轉為大寫
$code = strtoupper($_POST['code']);
$period = $_POST['period'];
$year = $_POST['year'];
$number = $_POST['number'];
$expense = $_POST['expense'];

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "UPDATE `invoice` SET `code` = '$code', `number` = '$number', `period` = '$period', `expense` = '$expense', `year` = '$year' WHERE `invoice`.`id` = $id";
} else {
    // $sql = "INSERT INTO invoice (`period`,`year`,`code`,`number`,`expense`) VALUES ('" . $_POST['period'] . "','" . $_POST['year'] . "','" . $_POST['code'] . "','" . $_POST['number'] . "','" . $_POST['expense'] . "')";
    // 順便連新增也改一改，老師一定是刻意想讓我們知道直接code有多麻煩 0.0
    $sql = "INSERT INTO invoice (`period`,`year`,`code`,`number`,`expense`) VALUES ('$period','$year','$code','$number','$expense')";
}

// echo "period=", $_POST['period'], "<br>";
// echo "year=", $_POST['year'], "<br>";
// echo "code=", $_POST['code'], "<br>";
// echo "number=", $_POST['number'], "<br>";
// echo "expense=", $_POST['expense'], "<br>";

// echo $sql;
$res = $pdo->exec($sql);

to("index.php");

if ($res == 1) {
    echo "新增/修改成功<br>";
    echo "<a href='index.php'>繼續輸入新獎號</a><br>";
    echo "<a href='list.php'>發票列表</a>";
} else {
    echo "新增/修改失敗<br>";
    echo "<a href='list.php'>發票列表</a>";
}
