<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/dbconnect.php";

// accountinfoに対するSQL
class Account{
    /**
     * アカウント登録
     * @param array $info
     * @return bool
     */
    public static function createAccount($info){
        $result = false;
        $sql = 'INSERT INTO accountinfo (email, pass) VALUES (?, ?)';
        $array = [];
        $array[] = $info["email"];
        $array[] = $info["password"];
        try {
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($array);
            return $result;
        } catch (\Exception $e) {
            return $result;
        }
    }
    /**
     * アカウント参照/ログイン時
     * @param String $info
     * @return bool
     */
    public static function searchAcount($info){
        $result = false;
        $sql = 'SELECT * FROM accountinfo WHERE email = ?';
        $array = [];
        $array[] = $info["email"];
        try {
            $stmt = connect()->prepare($sql);
            $stmt->execute($array);
            $result = $stmt->fetch();
            if ($info["password"]==$result["pass"]) return $result=1;
            elseif ($info["password"]!=$result["pass"]) return $result=0;
        } catch (\Exception $e) {
            return $result;
        }
    }
}



class Item{

}