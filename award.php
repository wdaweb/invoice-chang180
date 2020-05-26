<?php include_once "./com/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>對獎</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body class="container">
    <?php include "./include/header.php"; ?>

    <?php

    if (empty($_GET)) {
        echo "請選擇要對獎的項目<a href='invoice.php'>各期獎號</a>";
        exit();
    }

    $award_type = [
        1 => ["特別獎", 1, 8],
        2 => ["特獎", 2, 8],
        3 => ["頭獎", 2, 8],
        4 => ["二獎", 3, 7],
        5 => ["三獎", 3, 6],
        6 => ["四獎", 3, 5],
        7 => ["五獎", 3, 4],
        8 => ["六獎", 3, 3],
        9 => ["增開六獎", 4, 3],
    ];
    $aw = $_GET['aw'];
    echo "獎別：" . $award_type[$_GET['aw']][0] . "<br>";
    echo "年份：" . $_GET['year'] . "<br>";
    echo "期別：" . $_GET['period'] . "<br>";

    $award_nums = nums("award_number", [
        "year" => $_GET['year'],
        "period" => $_GET['period'],
        "type" => $award_type[$_GET['aw']][1],
    ]);
    echo "獎號數量：" . $award_nums;

    $award_numbers = all("award_number", [
        "year" => $_GET['year'],
        "period" => $_GET['period'],
        "type" => $award_type[$aw][1],
    ]);
    echo "<h4>對獎獎號</h4>";
    $t_num = [];
    foreach ($award_numbers as $num) {
        echo $num['number'] . "<br>";
        $t_num[] = $num['number'];
    }

    echo "<h4>該期發票號碼</h4>";
    $invoices = all("invoice", [
        "year" => $_GET['year'],
        "period" => $_GET['period'],
    ]);

    foreach ($invoices as $ins) {
        foreach ($t_num as $tn) {
            $len = 0 - $award_type[$aw][2];

            $target_num = mb_substr($tn, $len);

            if (mb_substr($ins['number'], $len) == $target_num) {
                echo "<h2 style='color:red'>" . $ins['number'] . "中獎了</h2>" . "<br>";
            }
        }
    }

    ?>

</body>

</html>