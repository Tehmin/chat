<?php


class Database
{
    function connect(){
        try {

            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );
            $db = new PDO("mysql:host=localhost;dbname=chat", "root", "", $options);
        } catch (PDOException $error) {
            file_put_contents(ROOT.'/logs/error_logs', $error->getMessage());
        }
        return $db;
    }
}
