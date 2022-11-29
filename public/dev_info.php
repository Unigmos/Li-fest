<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html");?>
    <link rel="stylesheet" href="css/dev_info.css">
    <link rel="stylesheet" href="css/reuse/header.css">
    <link rel="stylesheet" href="css/reuse/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <script src="js/under_fix.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html");?>
    <main class="main_container">
        <div class="dev_title">
            <h1>開発者情報</h1>
        </div>
        <div class="dev_box">
            <div class="dev_image">
                <img src="/public/image/Li-fest_transparent.png" alt="ShaneronIcon">
            </div>
            <div class="dev_content">
                <div class="dev_name">
                    <h2>Shaneron</h2>
                </div>
                <div class="dev_description">
                    <!---TODO:説明を書く--->
                    <p>ここに説明とかを書きますここに説明とかを書きますここに説明とかを書きます</p>
                </div>
            </div>
        </div>


        <div class="dev_box">
            <div class="dev_image">
                <img src="/public/image/Li-fest_transparent.png" alt="TreeIcon">
            </div>
            <div class="dev_content">
                <div class="dev_name">
                    <h2>Tree</h2>
                </div>
                <div class="dev_description">
                    <!---TODO:説明を書く--->
                    <p>ここに説明とかを書きますここに説明とかを書きますここに説明とかを書きます</p>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php");?>
</body>
</html>
