<?php
require_once "./dbconnect.php";

class Account{
    public static function createAccount($info){
        $dbname = DB_NAME_ACCOUNT;
        $result = false;
        $sql = "INSERT INTO $dbname (id, phonenum, pass,) VALUES(? ? ?)";
        $array = [];
        $array = $info["id"];
        $array = $info["email"];
        $array = $info["password"];
        try {
            $stmt = accountDbConnect()->prepare($sql);
            $result = $stmt->execute($array);
        } catch (\Exception $e) {
            return $result;
        }
    }
}