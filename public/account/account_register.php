<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/database/dao.php";
$array = array("email"=>"omoti@omoti","password"=>"himitu");
    $hasCreated = Account::createAccount($array);
    echo $hasCreated;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>