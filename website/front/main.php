<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;color:red;">
        <?php
            $ads=$Ad->all(['sh'=>1]);
            foreach($ads as $ad){
                echo $ad['text'];
                  //echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                echo str_repeat("&nbsp;",4);
            }
    ?>
    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->

    <div style="width:100%; padding:2px; height:290px;">
        <div id="mwww" loop="true" style="width:100%; height:100%;">
            <div style="width:99%; height:100%; position:relative;" class="cent">
                沒有資料
            </div>
        </div>
    </div>

    <script>
    var lin = new Array();
    <?php 
           $mvs=$Mvim->all(['sh'=>1]);
            foreach($mvs as $mv){
             echo "lin.push('upload/{$mv['img']}');";
    }
    ?>
    var now = 0;
    if (lin.length > 1) {
        setInterval("ww()", 3000);
        //now = 1;
    }
    // 需先有DOM(物件-php/html),才能有BOM正確的執行!(行為/功能-Js..)for動畫輪播功能,使其一開始即可出現動畫而不是"沒有資料"

    function ww() {
        // console.log("HI");
        $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
        //$("#mwww").attr("src",lin[now])
        now++;
        if (now >= lin.length)
            now = 0;
    }
    ww();
    </script>
    <div
        style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;color:purple;">
        <span class="t botli">最新消息區
            <?php
        if($News->count(['sh'=>1])>5){
            echo "<a href='index.php?do=news' style='float:right'>";
            echo "More...";   
            echo "</a>";
        }
?>
        </span>
        <ul class="ssaa" style="list-style-type:decimal;">
            <?php 
$all_news=$News->all(['sh'=>1]," limit 5");
foreach($all_news as $n){
    echo "<li>";
    echo mb_substr($n['text'],0,20);
    echo "<span class='all' style='display:none'>";
    echo $n['text'];
    echo "</span>";
    echo "</li>";
}
?>
        </ul>
        <!-- 彈出視窗 -->
        <div id="altt"
            style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
            <!-- position:absolute 絕對定位 -->
        </div>
        <script>
        $(".ssaa li").hover(
            function() {
                $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                // $(this)為li, 把其內容搬到altt 
                $("#altt").show()
                // 做完上述指令後,彈出視窗show出來
            }
        )
        $(".ssaa li").mouseout(
            function() {
                $("#altt").hide()
                // 滑鼠移開時,彈出視窗就隱藏
            }
        )
        </script>
    </div>
</div>