<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]){
    header("Location: contact_form.php");
    exit();
}
unset($_SESSION['csrf_token']);
$user = $_SESSION['user'];
$name = filter_input(INPUT_POST, "name");
$frequency = filter_input(INPUT_POST, "frequency");
$quantity = filter_input(INPUT_POST, "quantity");
$price = filter_input(INPUT_POST, "amount_per_piece");

// TODO:name,amount_per_piece, quantity 空白削除
// 基本ないけど、何か起きて値が入っていなかったらレダイレクトで戻る
if (!isset($name) || !isset($frequency) || !isset($quantity) || !isset($price)) {
    header("location: /public/item_registerform.php");
    exit();
}
$array = array("user"=>$user,"name"=>$name,"frequency"=>$frequency,"quantity"=>$quantity,"price"=>$price);
$hasCreated = Item::createInfo($array);
if ($hasCreated == true) {
    header("location: /public/confirmation.php");
    exit();
}else{
    // TODO:エラーメッセージ送信
    header("location: /public/item_registerform.php");
    exit();
}

?>