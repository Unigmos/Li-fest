<?php
require_once "./dbconnect.php";

class Account{
    public static function createAccount($info){
        $dbname = DB_NAME_ACCOUNT;
        $result = false;
        $sql = "INSERT INTO $dbname (id, phonenum, pass, username) VALUES(? ? ? ? ?)";
        $array = [];
        $array = $info["id"];
        $array = $info["phone_num"];
        $array = $info["password"];
        $array = $info["user_name"];
        try {
            $stmt = accountDbConnect()->prepare($sql);
            $result = $stmt->execute($array);
        } catch (\Exception $e) {
            return $result;
        }
    }
}