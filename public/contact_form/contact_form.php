<?php
    session_start();
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/contact_form.css">
</head>
<body>
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/header.html";?>
    <main class="main_container">
        <div class="contact_title">
            <h2>お問い合わせ</h2>
            <form action="contact_form_confirmation.php" method="post">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>"/>
                <h3>メールアドレス</h3>
                <input type="text" name="email" placeholder="例:XXX@gmail.com" required/>
                <h3>お問い合わせ内容</h3>
                <textarea name="message" placeholder="こちらにお問い合わせ内容を入力してください" required></textarea>
                <button type="submit">確認</button>
            </form>
        </div>
    </main>
    <!-- footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/reuse/footer.php";?>
</body>
</html>
