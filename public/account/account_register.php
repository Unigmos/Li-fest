<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
// POST受信上手く行くようにする
$email = $_POST["email"];
$pass = $_POST["password"];
$array = array("email"=>$email,"pass"=>$pass);

$hasCreated = Account::createAccount($array);
if ($hasCreated) {
    header("location: /public/loginform.php");
    exit();
}else{
    // TODO:エラーメッセージ送信
}

?>