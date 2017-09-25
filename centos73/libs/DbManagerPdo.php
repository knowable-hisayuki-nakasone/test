<?php

    function connectDbforPdo() {

        require_once 'DbSetting.php';

        $db_name = DB_NAME;
        $db_host = DB_HOST;
        $db_user = DB_USER;
        $db_pass = DB_PASS;

        $dsn    = "mysql:dbname=$db_name; host=$db_host";
        $usr    = $db_user;
        $passwd = $db_pass;

        try {
            // データベースへの接続を確立
            $db = new PDO($dsn, $usr, $passwd);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("接続エラー：{$e->getMessage()}");
        }
        return $db;

    }

?>