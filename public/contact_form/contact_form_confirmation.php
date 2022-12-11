<?php
    session_start();

	if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]){
		header("Location: contact_form.php");
		exit();
	}

    $email = $_POST["email"];
    $message = $_POST["message"];
    $csrf_token = $_POST["csrf_token"]
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
            <h2>お問い合わせ確認</h2>
            <form action="contact_form_sent.php" method="post">
                <h3>メールアドレス</h3>
                <p><?php echo htmlspecialchars($email, ENT_QUOTES,'UTF-8');?></p>
                <h3>お問い合わせ内容</h3>
                <p><?php echo htmlspecialchars($message, ENT_QUOTES,'UTF-8');?></p>
                <button type="button" onclick="history.back()">戻る</button>
                <button type="submit">送信</button>
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>"/>
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="message" value="<?php echo $message;?>">
            </form>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php";?>
</body>
</html>
