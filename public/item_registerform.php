<?php
session_start();
// ログインしていなかったらリダイレクト
if (!isset($_COOKIE['user'])){
    header("location: \public\loginform.php");
    exit();
}
$token_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($token_byte);
// セッションに保存
$_SESSION['csrf_token'] = $csrf_token;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html");?>
    <link rel="stylesheet" href="css/registerstyle.css">
    <script src="js/resize_data_size.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html"); ?>
    <main class="main_container">
        <div class="items">
            <form action="/public/receiver/item_register.php" method="post">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>"/>
                <div class="item_form">
                    <div class="item_name">
                    <label for="name">物品名</label>
                    <input type="text" name="name" id="name" placeholder="例：500mlのお茶" class="content" require>
                    </div>
                </div>
                <div class="item_form">
                    <div class="item_frequency">
                        <label for="frequency">頻度</label>
                        <select name="frequency" id="frequency" class="content">
                            <option value="日ごと" selected>日ごと</option>
                            <option value="週ごと">週ごと</option>
                            <option value="月ごと">月ごと</option>
                            <option value="年ごと">年ごと</option>
                        </select>
                    </div>
                </div>
                <div class="item_form">
                    <div class="item_quantity">
                        <label for="quantity">個数</label>
                        <input type="number" name="quantity" id="quantity" placeholder="例：1" class="content" require>
                    </div>
                </div>
                <div class="item_form">
                    <div class="item_number">
                        <label for="amount_per_piece">1つ当たりの金額(円)</label>
                        <input type="number" name="amount_per_piece" id="amount_per_piece" placeholder="例：100" class="content" require>
                    </div>
                </div>
                <div class="item_form">
                    <input type="submit" value="登録">
                </div>
            </form>
        </div>
    </main>
    <!-- footer -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php");?>
</body>
</html>