<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css">
    <style>
        body {
            min-width: 600px;
            min-height: 100vh;
            background: linear-gradient(135deg, red, orange, gold, green, blue, purple);
            overflow: hidden;
            /* color:white; */
        }
    </style>
</head>

<body>
    <?php include "./include/header.php"; ?>
    <div class="container-fluid mt-5 p-3 col col-3 d-flex justify-content-center border rounded-lg shadow bg-dark alert-light">
        <form action="save_invoice.php" method="post">
            <div class="input-group row mb-3 p-2">
                <label class="col-3" for="year"> 年份：</label>
                <select class="form-control col-9" name="year">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="input-group row mb-3 p-2">
                <label class="col-3" for="period">期別：</label>
                <select class="form-control col-9" name="period">
                    <option value="1">1,2月</option>
                    <option value="2">3,4月</option>
                    <option value="3">5,6月</option>
                    <option value="4">7,8月</option>
                    <option value="5">9,10月</option>
                    <option value="6">11,12月</option>
                </select>
            </div>
            <div class="input-group mb-3 p-2 row">
                <label class="form-label col-3">獎號：</label>
                <!-- 規定輸入必須為2個大寫英文字母，自動轉為大寫 -->
                <input class="form-control col-2 text-uppercase" type="text" name="code" pattern="[a-zA-Z]{2}" placeholder="AA" maxlength="2">
                <input class="form-control col-7" type="text" name="number" pattern="\d{8}" placeholder="88888888" maxlength="8">
            </div>
            <div class="input-group mb-3 p-2 row">
                <label class="form-label col-3" for="expense">花費：</label>
                <input class="form-control col-9" type="text" name="expense" pattern="^[1-9]\d*$" maxlength="10">
            </div>
                <input class="btn btn-outline-info m-2" type="submit" valut="儲存">
        </form>
    </div>
</body>

</html>