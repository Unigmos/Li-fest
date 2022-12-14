<?php
    session_start();

	if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]){
		header("Location: contact_form.php");
		exit();
	}
    // TODO:メール送信の確認

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = $_POST['email'];

    $subject = "お問い合わせありがとうございます。";

    $message = <<< EOM
    お問い合わせありがとうございます。
    以下の内容で承りました。
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
    【 メール 】
    {$_POST["email"]}
    【 お問い合わせ内容 】
    {$_POST["message"]}
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
    EOM;

    $headers = "From: contact@li-fest.com";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/head.html";?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/contact_form.css">
    <script src="/public/js/under_fix.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/header.html";?>
    <main class="main_container">
        <div class="contact_title">
            <h2>お問い合わせありがとうございます。</h2>
            <p>今後とも当サイトをよろしくお願いいたします。</p>
            <a href="contact_form.php">お問い合わせトップへ</a>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php";?>
</body>
</html>
