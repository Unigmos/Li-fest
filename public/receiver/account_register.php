<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";

$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "password");
// TODO:email 空白削除
// 基本ないけど、何か起きて値が入っていなかったらレダイレクトで戻る
if (!isset($email) || !isset($pass)) {
    header("location: /public/account_registerform.php");
}
$array = array("email"=>$email,"password"=>$pass);
// TODO:emailを参照してアカウントがあるか調べるあればエラーメッセージとともにリダイレクト

$hasCreated = Account::createAccount($array);
if ($hasCreated == true) {
    header("location: /public/loginform.php");
    exit();
}else{
    // TODO:エラーメッセージ送信
    header("location: /public/account_registerform.php");
}

?>