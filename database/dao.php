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
            return $result;
        } catch (\Exception $e) {
            return $result;
        }
    }
}



class Item{
    /**
     * アイテム情報登録
     * @param array $info
     * @return bool
     */
    public static function createInfo($info){
        $result = false;
        $sql = 'INSERT INTO iteminfo (user, name, frequency, quantity, price) VALUES (?, ?, ?, ?, ?)';
        $array = [];
        $array[] = $info["user"];
        $array[] = $info["name"];
        $array[] = $info["frequency"];
        $array[] = $info["quantity"];
        $array[] = $info["price"];
        try {
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($array);
            return $result;
        } catch (\Exception $e) {
            return $result;
        }
    }

    /**
     * アイテム情報検索
     * @param String $info
     * @return bool
     */
    public static function searchInfo($info){
        $result = false;
        $sql = 'SELECT * FROM iteminfo WHERE user = ?';
        $array = [];
        $array[] = $info;
        try {
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($array);
            $result = $stmt->fetchAll();
            return $result;
        } catch (\Exception $e) {
            return $result;
        }
    }
}