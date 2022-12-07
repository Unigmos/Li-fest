<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]){
    header("Location: /public/account_registerform.php");
    exit();
}
unset($_SESSION['csrf_token']);
unset($_SESSION['err']);
unset($_SESSION['email']);
$email = trim(filter_input(INPUT_POST, "email"));
$pass = password_hash(filter_input(INPUT_POST, "password"), PASSWORD_DEFAULT);
// 基本ないけど、何か起きて値が入っていなかったらレダイレクトで戻る
if (!isset($email) || !isset($pass)) {
    header("location: /public/account_registerform.php");
    exit();
}
$array = array("email"=>$email,"password"=>$pass);
$hasCreated = Account::createAccount($array);
if ($hasCreated == true) {
    header("location: /public/loginform.php");
    $_POST=[];
    exit();
}else{
    header("location: /public/account_registerform.php");
    $_SESSION['err'] =['email_error'=>'このemailは登録済みです'];
    $_SESSION['email'] = $email;
    $_POST=[];
    exit();
}

?>