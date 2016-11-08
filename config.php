<?php
/**
 * @copyright Copyright (c) 2016 FfS
 * @author Airat Sirazov
 * @link http://ffs.ru
 * @version v 1.0
 */

// Подключение Config.php из ядра
include_once $_SERVER['DOCUMENT_ROOT'].'\core\Config.php';

// Создание обьекта класса Config
$config = new Config();
// Ссылка на сайт
$siteUrl = 'http://dmfs.ru';

// Данные для подключения к базе данных
$db_host = 'localhost';
$database = 'cj14169_rd16_4';
$db_user = 'root';
$db_password = '';
