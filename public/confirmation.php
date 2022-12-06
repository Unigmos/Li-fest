<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
// TODO コメントアウト外す↓
// session_start();
// if (!isset($_COOKIE['user'])) {
//     //ログインしていなければログインページに飛ばす
//     header("location: /public/loginform.php");
//     exit();
// }
// TODO コメントアウト外す↑
//データがあるかどうか
$isdata = false;
// $data = Item::searchInfo($_SESSION['user']);// TODO コメントアウト外す
$data = Item::searchInfo('god');//TODO 消す。。テスト用
if (!isset($data)) {
    $isdata = false;
}else{
    $isdata = true;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html");?>
    <link rel="stylesheet" href="css/confirmation.css">
    <link rel="stylesheet" href="css/reuse/header.css">
    <link rel="stylesheet" href="css/reuse/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <script src="js/calc_cost.js" async></script>
    <script src="js/checkbox.js" async></script>
    <script src="js/resize_data_size.js" async></script>
    <script src="js/context_menu.js" async></script>
    <script src="js/under_fix.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html"); ?>

    <div id="context_menu">
        <ul>
            <li>編集</li>
            <li>削除</li>
        </ul>
    </div>

    <main class="main_container">
        <div class="action_container">
            <a class="action_button" href="/public/item_registerform.php">
                <div class="action_content">
                    <p text="+">新規追加</p>
                </div>
            </a>
            <a class="action_button" href="#">
                <div class="action_content">
                    <p text="×">全削除</p>
                </div>
            </a>
        </div>
        <div class="menu">
            <div class="accordion">
                <label for="day">日ごと</label>
                <input type="checkbox" id="day" class="day" onclick="Check(this.id)"/>
                <p id="day_total">日ごと合計:円</p>
            </div>
            <div id="day_div">
                <div class="box">
                    <div class="box_describe">
                        <div class="box_describe_data bg_color_one">
                            <p>物品名</p>
                        </div>
                        <div class="box_describe_data bg_color_two">
                            <p>個数(個)</p>
                        </div>
                        <div class="box_describe_data bg_color_three">
                            <p>1つ当たりの金額(円)</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <p>設定</p>
                    </div>
                </div>

                <div class="box">
                    <div class="box_content">
                        <div class="box_data bg_color_one">
                            <p>day_test_1</p>
                        </div>
                        <div class="box_data bg_color_two">
                            <p class="day_quantity">2</p>
                        </div>
                        <div class="box_data bg_color_three">
                            <p class="day_cost">100</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <!--- data-indexを要素が増えるたびに増やしていく --->
                        <button type="button" class="three_bt" id="three_button" name="days" value="1" onclick="Context(this)">
                            <span class="material-symbols-outlined">
                                more_vert
                            </span>
                        </button>
                    </div>
                </div>

                <div class="box">
                    <div class="box_content">
                        <div class="box_data bg_color_one">
                            <p>day_test_2</p>
                        </div>
                        <div class="box_data bg_color_two">
                            <p class="day_quantity">3</p>
                        </div>
                        <div class="box_data bg_color_three">
                            <p class="day_cost">50</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <!--- data-indexを要素が増えるたびに増やしていく --->
                        <button type="button" class="three_bt" id="three_button" name="days" value="1" onclick="Context(this)">
                            <span class="material-symbols-outlined">
                                more_vert
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <label for="week">週ごと</label>
                <input type="checkbox" id="week" class="week" onclick="Check(this.id)"/>
                <p id="week_total">週ごと合計:円</p>
            </div>
            <div id="week_div">
                <div class="box">
                    <div class="box_describe">
                        <div class="box_describe_data bg_color_one">
                            <p>物品名</p>
                        </div>
                        <div class="box_describe_data bg_color_two">
                            <p>個数</p>
                        </div>
                        <div class="box_describe_data bg_color_three">
                            <p>1つ当たりの金額</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <p>設定</p>
                    </div>
                </div>

                <div class="box">
                    <div class="box_content">
                        <div class="box_data bg_color_one">
                            <p>week_test_1</p>
                        </div>
                        <div class="box_data bg_color_two">
                            <p class="week_quantity">1</p>
                        </div>
                        <div class="box_data bg_color_three">
                            <p class="week_cost">500</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <!--- data-indexを要素が増えるたびに増やしていく --->
                        <button type="button" class="three_bt" id="three_button" name="weeks" data-index="1" onclick="Context()">
                            <span class="material-symbols-outlined">
                                more_vert
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <label for="month">月ごと</label>
                <input type="checkbox" id="month" class="month" onclick="Check(this.id)"/>
                <p id="month_total">月ごと合計:円</p>
            </div>
            <div id="month_div">
                <div class="box">
                    <div class="box_describe">
                        <div class="box_describe_data bg_color_one">
                            <p>物品名</p>
                        </div>
                        <div class="box_describe_data bg_color_two">
                            <p>個数</p>
                        </div>
                        <div class="box_describe_data bg_color_three">
                            <p>1つ当たりの金額</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <p>設定</p>
                    </div>
                </div>

                <div class="box">
                    <div class="box_content">
                        <div class="box_data bg_color_one">
                            <p>month_test_1</p>
                        </div>
                        <div class="box_data bg_color_two">
                            <p class="month_quantity">1</p>
                        </div>
                        <div class="box_data bg_color_three">
                            <p class="month_cost">2000</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <!--- data-indexを要素が増えるたびに増やしていく --->
                        <button type="button" class="three_bt" id="three_button" name="months" data-index="1">
                            <span class="material-symbols-outlined">
                                more_vert
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <label for="year">年ごと</label>
                <input type="checkbox" id="year" class="year" onclick="Check(this.id)"/>
                <p id="year_total">年ごと合計:円</p>
            </div>
            <div id="year_div">
                <div class="box">
                    <div class="box_describe">
                        <div class="box_describe_data bg_color_one">
                            <p>物品名</p>
                        </div>
                        <div class="box_describe_data bg_color_two">
                            <p>個数</p>
                        </div>
                        <div class="box_describe_data bg_color_three">
                            <p>1つ当たりの金額</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <p>設定</p>
                    </div>
                </div>

                <div class="box">
                    <div class="box_content">
                        <div class="box_data bg_color_one">
                            <p>year_test_1</p>
                        </div>
                        <div class="box_data bg_color_two">
                            <p class="year_quantity">1</p>
                        </div>
                        <div class="box_data bg_color_three">
                            <p class="year_cost">10000</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <!--- data-indexを要素が増えるたびに増やしていく --->
                        <button type="button" class="three_bt" id="three_button" name="years" data-index="1">
                            <span class="material-symbols-outlined">
                                more_vert
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <!-- footer -->
    <div><!-- TODO 消す。。確認用↓ -->
        <?php
        print_r($data);
        ?>
    </div><!-- TODO 消す。。確認用↑ -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php");?>
</body>
</html>
