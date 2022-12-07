<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html");?>
    <link rel="stylesheet" href="css/dev_info.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
    <script src="js/under_fix.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html");?>
    <main class="main_container">
        <div class="dev_title">
            <h2>開発者情報</h2>
        </div>
        <div class="dev_box">
            <div class="dev_image">
                <img src="/public/image/Shaneron-100x100.png" alt="ShaneronIcon">
            </div>
            <div class="dev_content">
                <div class="dev_name">
                    <h3>Shaneron</h3>
                </div>
                <div class="dev_description">
                    <p>
                        主にPHPとCSS、JavaScriptによるフロントエンドを担当しました。<br>
                        コーディング以外では、サイトロゴ制作とLi-festのGitHubページの管理を行っています。
                    </p>
                </div>
                <div class="dev_buttons">
                    <div class="dev_button">
                        <a href="https://github.com/Unigmos">
                            <i class="fa-brands fa-github"></i>GitHub
                        </a>
                    </div>

                    <div class="dev_button">
                        <a href="https://twitter.com/shaneron_kijo">
                            <i class="fa-brands fa-twitter"></i>Twitter
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dev_box">
            <div class="dev_image">
                <img src="/public/image/TreeHouse-460x460.png" alt="TreeHouseIcon">
            </div>
            <div class="dev_content">
                <div class="dev_name">
                    <h3>TreeHouse</h3>
                </div>
                <div class="dev_description">
                    <p>
                        企画案の提案者です。
                        主にPHPとCSS、JavaScriptによるバックエンドを担当しました。<br>
                        また、SQLによるデータベースの管理を行っています。
                        要望ありましたら変更していきたいと思います。
                    </p>
                </div>
                <div class="dev_buttons">
                    <div class="dev_button">
                        <a href="https://github.com/tree0303">
                            <i class="fa-brands fa-github"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php");?>
</body>
</html>
