<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>萬年曆</title>
    <style>
        /*請在這裹撰寫你的CSS*/
        #vw {
            margin: auto;
            width: 80vw;
            /* 100vw = 全滿 */
            height: 120px;
            color: blue;
            font-size: 100px;
            font-weight: bolder;
            text-align: center;
        }

        #vh {
            width: 80vw;
            /* 100vw = 全滿 */
            text-align: center;
            height: 500px;
            border: 20px solid gold;
            border-radius: 30px;
            background-image: url(./images/champion.jpg) ;
            margin: auto;
        }

        body {
            text-align: center;
        }

        label {
            font-style: inherit;
            font-size: 40px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: blue;
            font-weight: bolder;

        }

        input {
            font-style: inherit;
            font-size: 40px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: black;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <div id="vw">Welcome to World</div>
    <div id="vh"></div>
    <br>
    <form action="./test.php">
        <label for="name">請登入</label><br>
        <input type="text" id="" name="myName" value=""><br><br>
        <input type="submit" value="進入萬年曆...">
        <br><br><br>
        <hr>
        <label for="">評分結果</label><br>
        <input type="score" id="" name="myScore" value=""><br><br>
    </form>

    <form action="getData.php">
        <!-- 傳送php page -->
        <!-- </form> -->
        <!-- <form action="09_calendar.php"> -->
        <!-- 傳送php page -->
    </form>

</body>

</html>