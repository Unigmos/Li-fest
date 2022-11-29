<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";

$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "password");
echo $email;
if (!isset($email) || !isset($pass)) {
    header("location: /public/account_registerform.php");
}
$array = array("email"=>$email,"password"=>$pass);
$hasCreated = Account::createAccount($array);

if ($hasCreated) {
    header("location: /public/loginform.php");
    exit();
}else{
    // TODO:エラーメッセージ送信
}

?>