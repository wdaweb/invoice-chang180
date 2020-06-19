<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
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
    <?php
    include "./com/base.php";
    include "./include/header.php";
    $period = $_GET['period'] ?? ceil(date('n', time()) / 2);

    // $sql = "SELECT * FROM `invoice` WHERE period='$period'";
    // $rows = $pdo->query($sql)->fetchAll();
    $rows=all('invoice',['period'=>$period]);
    ?>
    <div class="container mt-5 p-3 border rounded-lg shadow">
        <h1 class="text-center">發票列表</h1>
        <!-- <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home">2020年</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile">2021年</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact">2022年</a>
            </div>
        </nav> -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link  <?= ($period == 1) ? 'active' : ''; ?>" href='list.php?period=1'>1,2月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 2) ? 'active' : ''; ?>" href='list.php?period=2'>3,4月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 3) ? 'active' : ''; ?>" href='list.php?period=3'>5,6月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 4) ? 'active' : ''; ?>" href='list.php?period=4'>7,8月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 5) ? 'active' : ''; ?>" href='list.php?period=5'>9,10月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 6) ? 'active' : ''; ?>" href='list.php?period=6'>11,12月</a></li>

                </ul>

            </div>
            <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link  <?= ($period == 1) ? 'active' : ''; ?>" href='list.php?period=1'>1,2月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 2) ? 'active' : ''; ?>" href='list.php?period=2'>3,4月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 3) ? 'active' : ''; ?>" href='list.php?period=3'>5,6月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 4) ? 'active' : ''; ?>" href='list.php?period=4'>7,8月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 5) ? 'active' : ''; ?>" href='list.php?period=5'>9,10月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 6) ? 'active' : ''; ?>" href='list.php?period=6'>11,12月</a></li>

                </ul>

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link  <?= ($period == 1) ? 'active' : ''; ?>" href='list.php?period=1'>1,2月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 2) ? 'active' : ''; ?>" href='list.php?period=2'>3,4月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 3) ? 'active' : ''; ?>" href='list.php?period=3'>5,6月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 4) ? 'active' : ''; ?>" href='list.php?period=4'>7,8月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 5) ? 'active' : ''; ?>" href='list.php?period=5'>9,10月</a></li>
                    <li class="nav-item"><a class="nav-link  <?= ($period == 6) ? 'active' : ''; ?>" href='list.php?period=6'>11,12月</a></li>

                </ul>

            </div> -->
        </div>
        <table class="table">
            <tr>
                <td>年份</td>
                <td>期別</td>
                <td>獎號</td>
                <td>花費</td>
                <td>操作</td>
            </tr>
            <?php
            foreach ($rows as $row) {
                echo "<tr>";
                echo "    <td>" . $row['year'] . "</td>";
                echo "    <td>" . $row['period'] . "</td>";
                echo "    <td>" . $row['code'] . "-" . $row['number'] . "</td>";
                echo "    <td>" . $row['expense'] . "</td>";
                echo "    <td class='btn-group text-nowrap'>";
                echo "<a class='btn btn-outline-info' href='edit.php?id=" . $row['id'] . "'>編輯</a>";
                echo "<a class='btn btn-outline-info' href='delete.php?id=" . $row['id'] . "'>刪除</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <!-- <hr>
        <a href="index.php">回首頁</a>
        <hr> -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>