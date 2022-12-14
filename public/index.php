<!---___XdMF_________________________________.MM"^__________________________________--->
<!---___XdMF__________.gMF___________________,M]____________________________________--->
<!---___XdMF__________.T"'___________________,M]____________________________MN______--->
<!---___XdMF________________________________.(Mm(,_____....,______....,___..MN..,___--->
<!---___XdMF___________dM]_____........`___.?OMF?!___JMB"7THMx__.M#"?7T5__?7MM77!___--->
<!---___XdMF___________dM]____JMMMMMMMF______,M]____dM!_____dM;_.MN,._______MN______--->
<!---___XdMF___________dM]___________________,M]____MMMMMMMMMMF___?TWMNa____MN______--->
<!---___XdMF___`_`_____dM]___________________,M]____?Mp______.__..____.M]___MN______--->
<!---___XUMMMMMMMMMM%__dM]___________________,M]_____,YMNNNMMD__.WMNgMMD____,MMN____--->

<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- head -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/reuse/head.html");?>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/replace.js" async></script>
</head>
<body>
    <!-- header -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/reuse/header.html");?>
    <main class="main_container">
        <div class="title_description">
            <h2>Li-festへようこそ！！</h2>
            <p>Li-festは生活必需品やサブスクリプションの購入頻度に応じて金額と製品をリストアップするアプリケーションです！</p>
            <div class="register_box">
                <a href="./account_registerform.php">初めてご利用の方はこちら</a>
            </div>
            <div class="login_box">
                <a href="./loginform.php">ログインはこちら</a>
            </div>
        </div>
        <div class="top_image">
            <img src="image/Li-fest.png" alt="サムネイル">
        </div>
        <div class="how_to_use">
            <div class="how_to_use_title">
                <h2>使い方</h2>
            </div>
            <div class="how_to_use_content">
                <div class="use_content_box">
                    <div class="use_sentence">
                        <p>サイト上部ボタンからログイン、または新規登録を行います。</p>
                    </div>
                    <div class="use_image">
                        <img src="image/choose_button.png" alt="使い方_1">
                    </div>
                </div>

                <div class="use_content_box replace_data">
                    <div class="use_image">
                        <img src="image/data_input.png" alt="使い方_2">
                    </div>
                    <div class="use_sentence">
                        <p>メールアドレス、パスワードを入力し登録(ログイン)を行います。</p>
                    </div>
                </div>

                <div class="use_content_box">
                    <div class="use_sentence">
                        <p>初期の状態では何も登録されていないので、「新規追加」ボタンからデータを追加します。</p>
                    </div>
                    <div class="use_image">
                        <img src="image/Li-fest_no_image.png" alt="使い方_3">
                    </div>
                </div>

                <div class="use_content_box replace_data">
                    <div class="use_image">
                        <img src="image/Li-fest_no_image.png" alt="使い方_4">
                    </div>
                    <div class="use_sentence">
                        <!--TODO:画像の差し替え-->
                        <p>各項目の情報を入力し、画面下部にある「登録」ボタンを押します。</p>
                    </div>
                </div>

                <div class="use_content_box">
                    <div class="use_sentence">
                        <p>
                            データが登録されました！<br>
                            基本的な操作は以上となるので後はご自由にお使いください。
                        </p>
                    </div>
                    <div class="use_image">
                        <img src="image/Li-fest_no_image.png" alt="使い方_5">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include($_SERVER["DOCUMENT_ROOT"]."/reuse/footer.php");?>
</body>
</html>
