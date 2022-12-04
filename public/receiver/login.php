<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
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
$hasCreated = Account::searchAcount($array);

if (gettype($hasCreated)=="array"){
    if ($hasCreated["pass"]==$pass){
        header("location: \public\confirmation.php");
        $_SESSION['user'] = $email;
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