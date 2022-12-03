<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
session_start();
// $user = $_SESSION['user'];
// TODO:元に戻す　テスト用
$user = "god";
$name = filter_input(INPUT_POST, "name");
$frequency = filter_input(INPUT_POST, "frequency");
$quantity = filter_input(INPUT_POST, "quantity");
$piece = filter_input(INPUT_POST, "amount_per_piece");

// TODO:name,amount_per_piece, quantity 空白削除
// 基本ないけど、何か起きて値が入っていなかったらレダイレクトで戻る
if (!isset($name) || !isset($frequency) || !isset($quantity) || !isset($piece)) {
    header("location: /public/item_registerform.php");
    exit();
}
$array = array("user"=>$user,"name"=>$name,"frequency"=>$frequency,"quantity"=>$quantity,"price"=>$piece);
$hasCreated = Item::createInfo($array);
if ($hasCreated == true) {
    header("location: /public/confimation.php");
    exit();
}else{
    // TODO:エラーメッセージ送信
    header("location: /public/item_registerform.php");
    exit();
}

?>