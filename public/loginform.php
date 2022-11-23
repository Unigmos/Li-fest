<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html";?>
    <link rel="stylesheet" href="/public/css/account/accountstyle.css">
    <script src="/public/js/checkinput.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html";?>
    <main class="main_container">
        <div class="login_contener">
            <h1>
                Li-fest
            </h1>
            <h3>
                <!--TODO:check文章(仮)-->
                生活を便利に過ごすために活用してみよう
            </h3>
            <div class="login_execution_contener">
                <!-- TODO:ログインをするためのphpのリンク -->
                <form action="" method="post" name="login_form">
                    <input type="text" id="email" class="email" placeholder="メールアドレス" onkeyup="buttonavAilability()">
                    <input type="password" id="password" class="password" placeholder="パスワード" onkeyup="buttonavAilability()">
                    <input type="submit" id="login_button" class="button" value="ログイン">
                </form>
            </div>
        </div>
        <div class="account_register_execution_content">
            <label>アカウントをまだお持ちではない方はこちら</label>
            <button type="button" onclick="location.href='account_registerfrom.php'" class="button" id="account_register_button">
                登録する
            </button>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.html";?>
</body>
</html>