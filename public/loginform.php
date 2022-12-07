<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;
$err = isset($_SESSION['err']) ? $_SESSION['err'] : null;
unset($_SESSION['email']);
unset($_SESSION['err']);

// ログインしていたらリダイレクト
if (isset($_COOKIE['user'])){
    header("location: \public\confirmation.php");
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
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html";?>
    <link rel="stylesheet" href="/public/css/accountstyle.css">
    <script src="/public/js/checkinput.js" async></script>
    <script src="/public/js/checkerror.js" async></script>
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
                <form action="/public/receiver/login.php" method="post" name="login_form">
                    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>"/>
                    <div>
                        <input type="email" id="email" name="email" placeholder="メールアドレス" value="<?php echo $email?>" onkeyup="buttonavAilability()">
                        <?php
                        $id = "email_error";
                        if ($err[$id]!=null) {
                            echo '<p id='.$id. 'class="error">'.$err[$id].'</p>';
                        }else{
                            echo '<p id='.$id. 'class="error" hidden>エラーメッセージなし</p>';
                        }
                        ?>
                    </div>
                    <div>
                        <input type="password" id="password" name="password" placeholder="パスワード" onkeyup="buttonavAilability()">
                        <?php
                        $id = "password_error";
                        if ($err[$id]!=null) {
                            echo '<p id='.$id. 'class="error">'.$err[$id].'</p>';
                        }else{
                            echo '<p id='.$id. 'class="error" hidden>エラーメッセージなし</p>';
                        }
                        ?>
                    </div>
                    <input type="submit" id="login_button" class="button" value="ログイン">
                </form>
            </div>
        </div>
        <div class="account_register_execution_content">
            <label>アカウントをまだお持ちではない方はこちら</label>
            <button type="button" onclick="location.href='account_registerform.php'" class="button" id="account_register_button">
                登録する
            </button>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php";?>
</body>
</html>