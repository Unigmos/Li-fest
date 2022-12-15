<?php
    session_start();

	if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]){
		header("Location: contact_form.php");
		exit();
	}

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

    mb_send_mail($to, $subject, $message, $headers);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/head.html";?>
    <link rel="stylesheet" href="/css/contact_form.css">
</head>
<body>
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/header.html";?>
    <main class="main_container">
        <div class="contact_title">
            <h2>お問い合わせありがとうございます。</h2>
            <p>今後とも当サイトをよろしくお願いいたします。</p>
            <a href="contact_form.php">お問い合わせトップへ</a>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/footer.php";?>
</body>
</html>
