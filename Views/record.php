<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1&display=swap" rel="stylesheet">

</head>
<body class="h-100">
    <div class="container mt-3">
        <h1>勤怠入力システム</h1>
    </div>
    <hr>
    <div class="container d-flex">
        <aside class="col-2 p-4">
            <ul class="list-unstyled position-fixed">
                <li>
                    <p>社員氏名</p>
                </li>
                <li>
                    <p>社員番号</p>
                </li>
                <li>
                    <a href="">
                        <p>勤怠入力</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <p>勤怠照会</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <p>社員情報</p>
                    </a>
                </li>
            </ul>
        </aside>
        <main class="col-10 p-4">
            <h2 class="mb-4 text-primary">勤怠実績</h2>
            <hr>
            <form action="" method="POST" class="col-4">
                <input type="month" class="form-control">
            </form>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">日付</th>
                        <th scope="col">開始</th>
                        <th scope="col">終了</th>
                        <th scope="col">勤務時間</th>
                        <th scope="col">修正</th>
                    </tr>
                    </thead>
                    <tbody class="text-center" >
                    <tr>
                        <th scope="row">2/1</th>
                        <td>08:15</td>
                        <td>18:15</td>
                        <td>9時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/2</th>
                        <td>07:45</td>
                        <td>17:15</td>
                        <td>8.5時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/3</th>
                        <td>08:15</td>
                        <td>17:15</td>
                        <td>8時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/4</th>
                        <td>08:15</td>
                        <td>18:15</td>
                        <td>9時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/5</th>
                        <td>07:45</td>
                        <td>17:15</td>
                        <td>8.5時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/6</th>
                        <td>08:15</td>
                        <td>17:15</td>
                        <td>8時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/7</th>
                        <td>08:15</td>
                        <td>18:15</td>
                        <td>9時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/8</th>
                        <td>07:45</td>
                        <td>17:15</td>
                        <td>8.5時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/9</th>
                        <td>08:15</td>
                        <td>17:15</td>
                        <td>8時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/10</th>
                        <td>08:15</td>
                        <td>18:15</td>
                        <td>9時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/11</th>
                        <td>07:45</td>
                        <td>17:15</td>
                        <td>8.5時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/12</th>
                        <td>08:15</td>
                        <td>17:15</td>
                        <td>8時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/13</th>
                        <td>08:15</td>
                        <td>18:15</td>
                        <td>9時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/14</th>
                        <td>07:45</td>
                        <td>17:15</td>
                        <td>8.5時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2/15</th>
                        <td>08:15</td>
                        <td>17:15</td>
                        <td>8時間</td>
                        <td>
                            <form action="" method="post">
                                <button class="form-control btn btn-sm btn-primary">修正する</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="fw-bold">
                        <th scope="row">合計</th>
                        <td></td>
                        <td></td>
                        <td>50時間</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </main>
    </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
