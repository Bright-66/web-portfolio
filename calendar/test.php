<?php
$month = isset($_GET['month']) ? $_GET['month'] : date("m");
$year = isset($_GET['year']) ? $_GET['year'] : date("Y");

// 上一個月和下一個月的邏輯
$prevMonth = $month - 1 < 1 ? 12 : $month - 1;
$prevYear = $prevMonth == 12 ? $year - 1 : $year;
$nextMonth = $month + 1 > 12 ? 1 : $month + 1;
$nextYear = $nextMonth == 1 ? $year + 1 : $year;

// 特殊日期
$spDate = [
    '2024-06-10' => "端午節",
    '2024-09-17' => "中秋節",
    '2025-06-20' => "端午節",
    '2025-09-27' => "中秋節",
    '2026-06-30' => "端午節",
    '2026-10-07' => "中秋節",
    '2025-01-28' => '除夕',
    '2025-01-29' => '大年初一'
];

$holidays = [
    '01-01' => "元旦",
    '02-28' => "和平紀念日",
    '04-04' => "兒童節",
    '04-05' => "清明節",
    '05-01' => "勞動節",
    '10-10' => "國慶日"
];

$baseYear = 2024; 

// 生肖對應表，順序從龍年開始，對應生肖圖檔
$animals = [
    'dragon.jpg',   
    'snake.jpg',    
    'horse.jpg',    
    'goat.jpg',    
    'monkey.jpg',   
    'chicke.jpg',   
    'dog.jpg',      
    'pig.jpg',      
    'mouse.jpg',    
    'cow.jpg',      
    'tiger.jpg',   
    'rabbit.jpg'    
];

// 計算與基準年（2024 年）之間的差距
$yearDifference = $year - $baseYear;

// 計算對應生肖的索引， 0 到 11 之間
$animalIndex = $yearDifference % 12;
if ($animalIndex < 0) {
    $animalIndex = $animalIndex + 12;
}

// 根據索引從生肖對應取得生肖圖像
$animalYear = $animals[$animalIndex];

// 生成生肖圖像
$animalImage = strtolower($animalYear);

// 根據月份決定季節圖
$seasons = [
    3 => 'spring.jpg',
    4 => 'spring.jpg',
    5 => 'spring.jpg',
    6 => 'summer.jpg',
    7 => 'summer.jpg',
    8 => 'summer.jpg',
    9 => 'autumn.jpg',
    10 => 'autumn.jpg',
    11 => 'champion.jpg',
    12 => 'winter.jpg',
    1 => 'winter.jpg',
    2 => 'winter.jpg'
];
$seasonImage = $seasons[$month];

// 根據月份決定星座、水果和魚類圖
$zodiac = [
    1 => 'Capricorn.jpg',
    2 => 'Aquarius.jpg',
    3 => 'Pisces.jpg',
    4 => 'Aries.jpg',
    5 => 'Taurus.jpg',
    6 => 'Gemini.jpg',
    7 => 'Cancer.jpg',
    8 => 'Leo.jpg',
    9 => 'Virgo.jpg',
    10 => 'Libra.jpg',
    11 => 'Scorpio.jpg',
    12 => 'Sagittarius.jpg'
];

$fruits = [
    1 => 'fruit1.jpg',
    2 => 'fruit2.jpg',
    3 => 'fruit3.jpg',
    4 => 'fruit4.jpg',
    5 => 'fruit5.jpg',
    6 => 'fruit6.jpg',
    7 => 'fruit7.jpg',
    8 => 'fruit8.jpg',
    9 => 'fruit9.jpg',
    10 => 'fruit10.jpg',
    11 => 'fruit11.jpg',
    12 => 'fruit12.jpg'
];

$fishes = [
    1 => 'fish1.jpg',
    2 => 'fish2.jpg',
    3 => 'fish3.jpg',
    4 => 'fish4.jpg',
    5 => 'fish5.jpg',
    6 => 'fish6.jpg',
    7 => 'fish7.jpg',
    8 => 'fish8.jpg',
    9 => 'fish9.jpg',
    10 => 'fish10.jpg',
    11 => 'fish11.jpg',
    12 => 'fish12.jpg'
];

$zodiacImage = $zodiac[$month];
$fruitImage = $fruits[$month];
$fishImage = $fishes[$month];

?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            background-color: rgb(255, 248, 207) background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.8;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            height: 100%;
            padding: 10px;
        }

        .left,
        .right {
            width: 20%;
            height: 112%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 0px;
            background-color: rgb(243, 243, 243);
        }

        .center {
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 0px;
        }

        .animal-img,
        .zodiac-img {
            width: 360px;
            height: auto;
            margin-top: 0px;
            margin-bottom: 50px;
            border-radius:50%;
        }

        .fruit-img,
        .fish-img {
            width: 360px;
            height: auto;
            margin-bottom: 50px;

        }

        .season-img {
            width: 2260px;
            height: 420px;
            margin: 0px;
            border: 15px solid gold;
            border-radius: 50px;
        }
        .calendar-wrapper {
            width: 100%;
            height: 100%;
            font-size: 30px;
            font-style: bold;
            font-style: initial;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 25px;
        }

        .marquee {
            background-color: rgb(252, 252, 192);
            border-radius: 50px;
            padding: 0px;
            width: 80%;
            height: 12%;
            overflow: hidden;
            margin-top: 10px;
        }

        .marquee p {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
            font-size: 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: blue;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* 萬年曆表 */
        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        td {
            text-align: center;
            font-size: 40px;
            /* font-weight: bold; */
            font-family: 'Pacifico', cursive;
            height: 60px;
        }

        .nav {
            width: 90%;
            margin: 10px auto;
        }

        td a {
            font-size: 35px;
            font-weight: bold;
        }

        td a:hover {
            color: blue;
            font-size: 40px;
        }

        td.holiday {
            color: gray;
            background-color: #f1c4fc;
            font-weight: bold;
        }

        td.today {
            background-color: #007bff;
            color: #fff;
            font-size: 55px;
            font-weight: bold;
            border-radius: 50%;
        }

        form {
            width: 800px;
            font-size: 25px;
            text-align: center;
            color: black;
            margin: auto;
            padding: 30px;
        }

        form label {
            display: inline-block;
            text-align-last: justify;
            font-size: 45px;
            font-weight: bold;
            color: purple;
        }

        form input[type=text] {
            width: 800px;
            height: 80px;
            padding: 30px;
            font-size: 50px;
            background-color: rgb(249, 220, 249);
            margin-top: 10px;
            border-radius: 10px;
        }

        form input[type=text]:hover {
            background-color: white;
        }

        form input[type=submit] {
            width: 100px;
            padding: 15px;
            font-size: 35px;
            background-color: lightgreen;
        }
    </style>
</head>

<body>

    <div class="container">
     
        <div class="left">
            <!-- 生肖圖 -->
            <img src="images/<?= strtolower($animalImage) ?>" alt="生肖圖" class="animal-img">
            <!-- 魚類圖 -->
            <img src="images/<?= strtolower($fishImage) ?>" alt="魚類圖" class="fish-img">
            <!-- 水果圖 -->
            <img src="images/<?= strtolower($fruitImage) ?>" alt="水果圖" class="fruit-img">
        </div>

        <div class="center">
            <!-- 四季圖 -->
            <img src="images/<?= strtolower($seasonImage) ?>" alt="四季圖" class="season-img">

            <!-- 跑馬燈 -->
            <div class="marquee">
                <p>今天是：
                    <?= date("Y-m-d") ?>，祝您生活愉快！
                    ~ 重磅: 2024/11/24 中華隊(台灣)勇奪P12棒球賽世界冠軍！~
                </p>
            </div>

            <div class="nav">
                <table style="width:70% ; margin:auto;">
                    <tr>
                        <td style='text-align:left ; font-size:45px;'>
                            <a href="test.php?<?= http_build_query(['year' => $prevYear, 'month' => $prevMonth]) ?>">&nbsp&nbsp
                                上一個月< </a>
                                    <a href="test.php?<?= http_build_query(['year' => $year - 1]) ?>">&nbsp 前年<<</a>
                        </td>
                        <td style="font-size:60px;font-weight:bold;color:blue;">
                            <?php echo "{$year}年 {$month}月"; ?>
                        </td>
                        <td style='text-align:right ; font-size:45px;'>
                            <a
                                href="test.php?<?= http_build_query(['year' => $nextYear, 'month' => $nextMonth]) ?>">下一個月></a>
                            <a href="test.php?<?= http_build_query(['year' => $year + 1]) ?>">&nbsp 明年>> &nbsp&nbsp</a>
                        </td>
                    </tr>
                </table>
                <hr>
            </div>
            <!-- 萬年曆 -->
            <div class="calendar-wrapper">
                <table>
                    <tr>
                        <td></td>
                        <td style="font-size: 45px;font-weight: bold; color:red;">日</td>
                        <td style="font-size: 45px;font-weight: bold;">一</td>
                        <td style="font-size: 45px;font-weight: bold;">二</td>
                        <td style="font-size: 45px;font-weight: bold;">三</td>
                        <td style="font-size: 45px;font-weight: bold;">四</td>
                        <td style="font-size: 45px;font-weight: bold;">五</td>
                        <td style="font-size: 45px;font-weight: bold;color:red;">六</td>
                    </tr>

                    <?php
        $firstDay = "{$year}-{$month}-01";
        $firstDayTime = strtotime($firstDay);
        $firstDayWeek = date("w", $firstDayTime);

        for ($i = 0; $i < 6; $i++) {
            echo "<tr>";
            echo "<td>";
    echo $i+1;
    echo "</td>";
            for ($j = 0; $j < 7; $j++) {
                $cell = $i * 7 + $j - $firstDayWeek;
                $theDayTime = strtotime("$cell days $firstDay");

                $theMonth = (date("m", $theDayTime) == date("m", $firstDayTime)) ? '' : 'grey-text';
                $isToday = (date("Y-m-d", $theDayTime) == date("Y-m-d")) ? 'today' : '';
                $w = date("w", $theDayTime);
                $isHoliday = ($w == 0 || $w == 6) ? 'holiday' : '';

                echo "<td class='$isHoliday $theMonth $isToday'>";
                echo date("d", $theDayTime);

                if (isset($spDate[date("Y-m-d", $theDayTime)])) {
                    echo "<br>{$spDate[date("Y-m-d", $theDayTime)]}";
                }

                if (isset($holidays[date("m-d", $theDayTime)])) {
                    echo "<br>{$holidays[date("m-d", $theDayTime)]}";
                }

                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
                </table>
                <hr>
            </div> -->
        </div>

        <div class="right">
            <!-- 星座圖 -->
            <img src="images/<?= strtolower($zodiacImage) ?>" alt="星座圖" class="zodiac-img">
            <!-- 星座mp3 -->
            <td colspan="4">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/SkAZ11zQDIg"
                    title="Saint Seiya Soul of Gold - Soldier Dreams" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </td>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <form action="notes.php" method="post">
        <div>
            <label for="">【Daily Memo】</label>
            <input type="text" name="notes" id="">
        </div>
        </div> &nbsp </div>
        <div>
            <input type="submit" value="送出">
        </div>
    </form>

</body>

</html>