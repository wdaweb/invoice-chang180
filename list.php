<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <style>
        body {
            font-family: "微軟正黑體";
            min-width: 600px;
            min-height: 100vh;
            /* overflow: hidden; */
        }
    </style>
</head>

<body>
    <?php
    // include "./include/header.php";
    include "./com/base.php";

    $sql = "SELECT * FROM `invoice`";
    $rows = $pdo->query($sql)->fetchAll();
    // echo "<pre>";
    // echo print_r($rows);
    // echo "</pre>";
    ?>
    <div class="container">
        <table class="table mt-2 border rouded-lg shadow">
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
                echo "    <td class='btn-group'>";
                echo "<a class='btn btn-outline-info' href='edit.php?id=" . $row['id'] . "'>編輯</a>";
                echo "<a class='btn btn-outline-info' href='delete.php?id=" . $row['id'] . "'>刪除</a>";
                echo "</td>";
                echo "</tr>";
                // echo "<tr><td>",$row['id'], "</td><td>", $row['name'], "</td><td>", $row['tel'], "</td></tr>";
            }
            ?>
        </table>
        <hr>
        <a href="index.php">回首頁</a>
        <hr>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>