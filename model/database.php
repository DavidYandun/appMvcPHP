<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=yandunbddserver.mysql.database.azure.com;dbname=bdd;charset=utf8', 'david@yandunbddserver', 'ch0c0latE');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
