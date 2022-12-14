<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;
$err = isset($_SESSION['err']) ? $_SESSION['err'] : null;
unset($_SESSION['email']);
unset($_SESSION['err']);
// ログインしていたらリダイレクト
if (isset($_COOKIE['user'])){
    header("location: confirmation.php");
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
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/head.html";?>
    <link rel="stylesheet" href="/css/accountstyle.css">
    <script src="/js/checkinput.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/header.html" ?>
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
                <form action="/receiver/account_register.php" method="post" name="account_register_form">
                    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>"/>
                    <div>
                        <input type="email" id="email" name="email" placeholder="メールアドレス" value="<?php echo $email?>" onkeyup="buttonavAilability()">
                        <?php
                        $id = "email_error";
                        if (isset($err[$id])) {
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
                        if (isset($err[$id])) {
                            echo '<p id='.$id. 'class="error">'.$err[$id].'</p>';
                        }else{
                            echo '<p id='.$id. 'class="error" hidden>エラーメッセージなし</p>';
                        }
                        ?>
                    </div>
                    <input type="submit" id="account_register_button" class="button" value="登録" disabled>
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
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/footer.php";?>
</body>
</html>
