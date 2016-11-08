<?php
/**
 * @copyright Copyright (c) 2016 FfS
 * @author Airat Sirazov
 * @link http://ffs.ru
 * @version v 1.0
 */

class Database {

    public function __construct() {
        // Подключаем БД
        $dbData = Config::getDBData();
        $this->db_connect($dbData);
    }

    // Подключение к БД
    public function db_connect($dbData) {
        $dsn = "mysql:host=" . $dbData['db_host'] . ";" . "dbname=" . $dbData['database'];
        try {
            $pdo = new PDO($dsn, $dbData['db_user'], $dbData['db_password']);
        } catch (PDOException $e) {
            die('Connection error: ' . $e->getMessage());
        }
        return true;
    }
}