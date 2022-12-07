<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]){
    header("Location: \public\confirmation.php");
    exit();
}
unset($_SESSION['csrf_token']);
unset($_SESSION['err']);
unset($_SESSION['email']);
$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "password");
// 基本ないけど、何か起きて値が入っていなかったらレダイレクトで戻る
if (!isset($email) || !isset($pass)) {
    header("location: /public/loginform.php");
    $pass=0;
    exit();
}
$array = array("email"=>$email);
$hasSearched = Account::searchAcount($array);
var_dump(gettype($hasSearched)=="array");
if (gettype($hasSearched)=="array"){
    if (password_verify($pass,$hasSearched['pass'])){
        $_SESSION['user'] = $email;
        header("location: \public\confirmation.php");
        $pass=0;
        $_POST=[];
        exit();
    }else{
        // TODO:エラーメッセージ送信　パスワードが違う
        header("location: /public/loginform.php");
        $_SESSION['err'] =['password_error'=>'パスワードが違います'];
        $_SESSION['email'] = $email;
        $pass=0;
        $_POST=[];
        exit();
    }
}else{
        // TODO:エラーメッセージ送信　emailが違う
        header("location: /public/loginform.php");
        $_SESSION['err'] =['email_error'=>'このemailは登録されていません'];
        $pass=0;
        $_POST=[];
        exit();
}


?>