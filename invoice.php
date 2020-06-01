<?php include_once "./com/base.php";
$period = $_GET['period'] ?? ceil(date('n', time()) / 2);

$month = [
    '1' => "1,2月",
    '2' => "3,4月",
    '3' => "5,6月",
    '4' => "7,8月",
    '5' => "9,10月",
    '6' => "11,12月",
];

$year = date("Y");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>各期獎號</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body {
            font-family: "微軟正黑體";
            min-width: 600px;
            min-height: 100vh;
            background: #eee;
        }
    </style>
</head>

<body>
    <?php include "./include/header.php"; ?>

    <div class="container mt-5 p-3 border rounded-lg shadow">
        <!-- <form action="save_award.php" method="post"> -->
        <h1 class="text-center">期別</h1>
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href='invoice.php?period=1' style="background:<?= ($period == 1) ? 'lightgray' : 'white'; ?>">1,2月</a></li>
            <li class="nav-item"><a class="nav-link" href='invoice.php?period=2' style="background:<?= ($period == 2) ? 'lightgray' : 'white'; ?>">3,4月</a></li>
            <li class="nav-item"><a class="nav-link" href='invoice.php?period=3' style="background:<?= ($period == 3) ? 'lightgray' : 'white'; ?>">5,6月</a></li>
            <li class="nav-item"><a class="nav-link" href='invoice.php?period=4' style="background:<?= ($period == 4) ? 'lightgray' : 'white'; ?>">7,8月</a></li>
            <li class="nav-item"><a class="nav-link" href='invoice.php?period=5' style="background:<?= ($period == 5) ? 'lightgray' : 'white'; ?>">9,10月</a></li>
            <li class="nav-item"><a class="nav-link" href='invoice.php?period=6' style="background:<?= ($period == 6) ? 'lightgray' : 'white'; ?>">11,12月</a></li>
        </ul>

        <!-- <div class="input-group form-row mb-3 p-2">
                <label class="col-3" for="year"> 年份：</label>
                <select class="form-control col-9" name="year">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div> -->
        <!-- <div class="input-group form-row mb-3 p-2">
                <label class="col-3" for="period">期別：</label>
                <select class="form-control col-9" name="period">
                    <option value="1">1,2月</option>
                    <option value="2">3,4月</option>
                    <option value="3">5,6月</option>
                    <option value="4">7,8月</option>
                    <option value="5">9,10月</option>
                    <option value="6">11,12月</option>
                </select>
            </div> -->
        <?php

        $num1 = find('award_number', ['period' => $period, 'year' => $year, 'type' => 1]);
        $num2 = find('award_number', ['period' => $period, 'year' => $year, 'type' => 2]);

        $num3 = all('award_number', ['period' => $period, 'year' => $year, 'type' => 3]);
        $num4 = all('award_number', ['period' => $period, 'year' => $year, 'type' => 4]);


        ?>

        <table class="table">
            <tbody>
                <tr>
                    <td>年月份</td>
                    <td><?= $year; ?>年<?= $month[$period]; ?></td>
                </tr>
                <tr>
                    <th rowspan="2">特別獎</th>
                    <td class="number">
                        <?= $num1['number'] ?? ''; ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-secondary" href="award.php?aw=1&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                    </td>
                </tr>
                <tr>
                    <td> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td>
                </tr>
                <tr>
                    <th rowspan="2">特獎</th>
                    <td class="number"><?= $num2['number'] ?? ''; ?></td>
                    <td>
                        <a class="btn btn-outline-secondary" href="award.php?aw=2&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                    </td>
                </tr>
                <tr>
                    <td> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td>
                </tr>
                <tr>
                    <th rowspan="2">頭獎</th>
                    <td class="number">
                        <?php
                        foreach ($num3 as $num) {
                            echo $num['number'] . "<br>";
                        }
                        ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-secondary" href="award.php?aw=3&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                    </td>
                </tr>
                <tr>
                    <td> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td>
                </tr>
                <tr>
                    <th>二獎</th>
                    <td> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元 </td>
                    <td><a class="btn btn-outline-secondary" href="award.php?aw=4&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th>三獎</th>
                    <td> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td>
                    <td><a class="btn btn-outline-secondary" href="award.php?aw=5&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th>四獎</th>
                    <td> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td>
                    <td><a class="btn btn-outline-secondary" href="award.php?aw=6&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th>五獎</th>
                    <td> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td>
                    <td><a class="btn btn-outline-secondary" href="award.php?aw=7&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th>六獎</th>
                    <td> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td>
                    <td><a class="btn btn-outline-secondary" href="award.php?aw=8&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th rowspan="2">增開六獎</th>
                    <td>
                        <?php
                        foreach ($num4 as $num) {
                            echo $num['number'] . "<br>";
                        }
                        ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-secondary" href="award.php?aw=9&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                    </td>
                <tr>
                    <td> 多賞你2百元</td>
                </tr>
                </tr>
            </tbody>
        </table>
        <!-- 不存在id則直接隱藏按鈕 -->
        <a class="btn btn-danger" href="edit_invoice.php?year=<?= $year; ?>&period=<?= $period; ?>&id=<?= $num1['id'] ?? '" hidden>'; ?>">重新輸入本期獎號</a>
        <!-- <hr>
            <a href="list.php">發票列表</a>
            <a href="index.php">回首頁</a>
            <hr> -->
        <!-- </form> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>