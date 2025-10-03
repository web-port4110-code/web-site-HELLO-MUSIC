<?php
    function getdb() {
        $dbn = 'mysql:dbname=test; host=127.0.0.1; port=8889';
        $user = 'selfphp';
        $pass = 'selfpass';
        
        try {
            $db = new PDO($dbn, $user, $pass);
            print '接続に成功しました';
            return $db;
        } catch (\Throwable $th) {
            die("接続エラー：{$th->getMessage()}");
        }   
    }