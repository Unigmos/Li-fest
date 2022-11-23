<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html";?>
    <link rel="stylesheet" href="/public/css/accountstyle.css">
    <script src="/public/js/checkinput.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html" ?>
    <main class="main_container">
        <div class="login_contener">
            <h1>
                Li-fest
            </h1>
            <h3>
                <!--TODO:check文章(仮)-->
                生活を便利に過ごすために活用してみよう
            </h3>
            <div class="account_register_execution_content">
                <!-- TODO:post受信上手くいかない -->
                <form action="/public/account/account_register.php" method="post" name="account_register_form">
                    <input type="text" id="email" class="email" placeholder="メールアドレス" onkeyup="buttonavAilability()">
                    <input type="password" id="password" class="password" placeholder="パスワード" onkeyup="buttonavAilability()">
                    <input type="submit" id="account_register_button" class="button" value="登録">
                </form>
            </div>
            
        </div>
        <div class="login_execution_contener">
            <label>アカウントをお持ちの方はこちら</label>
            <button type="button" onclick="location.href='loginform.php'" class="button" id="login_button">
                ログインする
            </button>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php";?>
</body>
</html>