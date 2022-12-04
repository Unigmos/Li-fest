<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";

$email = filter_input(INPUT_POST, "email");
//TODO:ハッシュ化をどこでするか、アカウント登録も同様
$pass = filter_input(INPUT_POST, "password");
// TODO:emailの空白削除
// 基本ないけど、何か起きて値が入っていなかったらレダイレクトで戻る
if (!isset($email) || !isset($pass)) {
    header("location: /public/loginform.php");
    $pass=0;
    exit();
}
$array = array("email"=>$email,"password"=>$pass);
$hasCreated = Account::searchAcount($array);

if ($hasCreated) {
    header("location: \public\confirmation.php");
    session_start();
    $_SESSION['user'] = $email;
    $email=0;
    $pass=0;
    $array=[];
    $_POST=[];
    exit();
}elseif ($hasCreated == 0){
    // TODO:エラーメッセージ送信　パスワードが違う
    header("location: /public/loginform.php");
    exit();
}else{
    // TODO:エラーメッセージ送信　emailが違う
    header("location: /public/loginform.php");
    exit();
}

?>