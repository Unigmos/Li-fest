<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";

$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "password");
// TODO:emailの空白削除
// 基本ないけど、何か起きて値が入っていなかったらレダイレクトで戻る
if (!isset($email) || !isset($pass)) {
    header("location: /public/loginform.php");
}
$array = array("email"=>$email,"password"=>$pass);
$hasCreated = Account::searchAcount($array);

if ($hasCreated) {
    header("location: \public\confirmation.php");
    exit();
}elseif ($hasCreated == 0){
    // TODO:エラーメッセージ送信　パスワードが違う
    header("location: /public/loginform.php");
}else{
    // TODO:エラーメッセージ送信　emailが違う
    header("location: /public/loginform.php");
}

?>