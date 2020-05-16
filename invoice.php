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
            font-family: "微軟正黑體";
            min-width: 600px;
            min-height: 100vh;
            background: #eee;
        }
    </style>
</head>

<body>
    <?php include "./include/header.php"; ?>

    <div class="container-fluid mt-5 p-3 d-flex col-6 justify-content-center border rounded-lg shadow">
        <form action="save_award.php" method="post">
            <h2>輸入中獎號碼</h2>
            <div class="input-group form-row mb-3 p-2">
                <label class="col-3" for="year"> 年份：</label>
                <select class="form-control col-9" name="year">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="input-group form-row mb-3 p-2">
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
            <table class="table">
                <tbody>
                    <tr>
                        <th rowspan="2">特別獎</th>
                        <td class="number"> 12620024 </td>
                    </tr>
                    <tr>
                        <td> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td>
                    </tr>
                    <tr>
                        <th rowspan="2">特獎</th>
                        <td class="number"> 39793895 </td>
                    </tr>
                    <tr>
                        <td> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td>
                    </tr>
                    <tr>
                        <th rowspan="2">頭獎</th>
                        <td class="number">
                            <p>67913945</p>
                            <p>09954061</p>
                            <p>54574947</p>
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td>
                    </tr>
                    <tr>
                        <th>二獎</th>
                        <td> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元 </td>
                    </tr>
                    <tr>
                        <th>三獎</th>
                        <td> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td>
                    </tr>
                    <tr>
                        <th>四獎</th>
                        <td> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td>
                    </tr>
                    <tr>
                        <th>五獎</th>
                        <td> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td>
                    </tr>
                    <tr>
                        <th>六獎</th>
                        <td> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td>
                    </tr>
                    <tr>
                        <th>增開六獎</th>
                        <td> 007 <br>008<br>009</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <a href="list.php">發票列表</a>
            <a href="index.php">回首頁</a>
            <hr>
        </form>
    </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>