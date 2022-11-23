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
            <!-- TODO:アイテムを保存する用のphpファイルのリンク -->
            <form action="#########" method="post">
                <div class="item_form">
                    <div class="item_name">
                    <label for="name">物品名</label>
                    <input type="text" name="name" id="name" placeholder="例：500mlのお茶" class="content">
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
                        <input type="text" name="frequency" id="quantity" placeholder="例：1個" class="content">
                    </div>
                </div>
                <div class="item_form">
                    <div class="item_number">
                        <label for="amount_per_piece">1つ当たりの金額(円)</label>
                        <input type="number" name="amount_per_piece" id="amount_per_piece" placeholder="例：100" class="content">
                    </div>
                </div>
                <div class="item_form">
                    <input type="submit" value="登録">
                </div>
            </form>
        </div>
    </main>
    <!-- footer -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.html");?>
</body>
</html>