<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html");?>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <script src="js/replace.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html");?>
    <main class="main_container">
        <div class="title_description">
            <h2>Li-festへようこそ！！</h2>
            <p>Li-festは生活必需品やサブスクリプションの購入頻度に応じて金額と製品をリストアップするアプリケーションです！</p>
            <div class="register_box">
                <a href="./account_registerform.php">初めてご利用の方はこちら</a>
            </div>
            <div class="login_box">
                <a href="./loginform.php">ログインはこちら</a>
            </div>
        </div>
        <div class="top_image">
            <img src="image/Li-fest.png" alt="サムネイル">
        </div>
        <div class="how_to_use">
            <div class="how_to_use_title">
                <h2>使い方</h2>
            </div>
            <div class="how_to_use_content">
                <div class="use_content_box">
                    <div class="use_sentence">
                        <p>サイト上部ボタンからログイン、または新規登録を行います。</p>
                    </div>
                    <div class="use_image">
                        <img src="image/choose_button.png" alt="使い方_1">
                    </div>
                </div>

                <div class="use_content_box replace_data">
                    <div class="use_image">
                        <img src="image/Li-fest_no_image.png" alt="使い方_2">
                    </div>
                    <div class="use_sentence">
                        <!--TODO:説明を考える-->
                        <p>使い方は云々</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php");?>
</body>
</html>
