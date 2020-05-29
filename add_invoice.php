<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增開獎獎號</title>
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
    <div class="container-fluid mt-5 p-3 col-6 flex-column justify-content-center border rounded-lg shadow">
        <h1 class="text-center">輸入中獎號碼</h1>

        <form class="border rounded-lg" action="save_number.php" method="post">
            <table class="table">
                <tr>
                    <!-- <td>年月份</td> -->
                    <td>
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
                        <!-- <input class="" type="number" name="year" id=""> -->
                        <!-- <select class="" name="period">
                            <option value="1">1,2月</option>
                            <option value="2">3,4月</option>
                            <option value="3">5,6月</option>
                            <option value="4">7,8月</option>
                            <option value="5">9,10月</option>
                            <option value="6">11,12月</option>
                        </select> -->
                    </td>
                </tr>
                <tr>
                    <td>

                        <div class="input-group mb-3 p-2 form-row">
                            <label class="form-label col-3" for="num1">特別獎</label>
                            <input class="form-control col-9" type="text" name="num1" pattern="\d{8}" placeholder="88888888" maxlength="8" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>

                        <div class="input-group mb-3 p-2 form-row">
                            <label class="form-label col-3" for="num1">特獎</label>
                            <input class="form-control col-9" type="text" name="num2" pattern="\d{8}" placeholder="88888888" maxlength="8" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>

                        <div class="input-group mb-3 p-2 form-row">
                            <label class="form-label col-3 flex-column" for="num3[]">頭獎</label>
                            <div class="flex-column col-9">

                                <input class="form-control" type="text" name="num3[]" pattern="\d{8}" placeholder="88888888" maxlength="8" required>
                                <input class="form-control" type="text" name="num3[]" pattern="\d{8}" placeholder="88888888" maxlength="8" required>
                                <input class="form-control" type="text" name="num3[]" pattern="\d{8}" placeholder="88888888" maxlength="8">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>

                        <div class="input-group mb-3 p-2 form-row">
                            <label class="form-label col-3 flex-column" for="num4[]">增開六獎</label>
                            <div class="flex-column col-9">

                                <input class="form-control" type="text" name="num4[]" pattern="\d{8}" placeholder="88888888" maxlength="8" required>
                                <input class="form-control" type="text" name="num4[]" pattern="\d{8}" placeholder="88888888" maxlength="8" required>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <input class="m-3 btn btn-outline-info" type="submit" value="送出">
        </form>
    </div>


</body>

</html>