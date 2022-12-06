<?php
    session_start();

	if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]){
		header("Location: contact_form.php");
		exit();
	}

    $email = $_POST["email"];
    $message = $_POST["message"];
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
            <form action="send.php" method="post">
                <h3>メールアドレス</h3>
                <?php echo htmlspecialchars($email, ENT_QUOTES,'UTF-8');?>
                <h3>お問い合わせ内容</h3>
                <p><?php echo htmlspecialchars($message, ENT_QUOTES,'UTF-8');?></p>
            </form>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/public/reuse/footer.php";?>
</body>
</html>
