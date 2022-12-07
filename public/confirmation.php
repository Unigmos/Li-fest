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
// $data = Item::searchInfo('god');//TODO 消す。。テスト用
$data = Array(Array("id"=>3, "user"=> "god", "name"=>"はぶらし", "frequency"=>"日ごと", "quantity"=>2, "price"=> 200),
Array("id"=>4, "user"=> "god", "name"=>"中島くん", "frequency"=>"月ごと", "quantity"=>1, "price"=> 3000),
Array("id"=>6, "user"=> "god", "name"=>"はぶらし", "frequency"=>"日ごと", "quantity"=>3, "price"=> 300));
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
            <?php
            if ($isdata) {
                $frequencies = array("day"=>'日ごと', "week"=>'週ごと', "month"=>'月ごと', "year"=>'年ごと');
                $frequencykeies = array_keys($frequencies);
                for ($i=0; $i < count($frequencies); $i++) { 
                    $key = $frequencykeies[$i];
                    $frequency = $frequencies[$key];
                    $items[$i] = array_values(array_filter($data,function($item) use($frequency){
                        return $item['frequency'] == $frequency;
                    }));
                    
                    echo '
            <div class="accordion">
                <label for="'.$key.'">'.$frequency.'</label>
                <input type="checkbox" id="'.$key.'" class="'.$key.'" onclick="Check(this.id)"/>
                <p id="'.$key.'_total">'.$frequency.'合計:円</p>
            </div>
            <div id="'.$key.'_div">';
                    for ($j=0; $j < count($items[$i]); $j++) { 
                        echo '
                <div class="box">
                    <div class="box_describe">
                        <div class="box_describe_data bg_color_one">
                            <p>'.$items[$i][$j]["name"].'</p>
                        </div>
                        <div class="box_describe_data bg_color_two">
                            <p class="'.$key.'_quantity">'.$items[$i][$j]["quantity"].'(個)</p>
                        </div>
                        <div class="box_describe_data bg_color_three">
                            <p class="'.$key.'_cost">'.$items[$i][$j]["price"].'(円)</p>
                        </div>
                    </div>
                    <div class="box_button">
                        <p>設定</p>
                    </div>
                </div>';
                    }
                    echo '
            </div>';
                }
            }
            ?>
        </div>
    </main>
    <!-- footer -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php");?>
</body>
</html>
