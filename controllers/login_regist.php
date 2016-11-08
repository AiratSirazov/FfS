<?php
/**
 * @copyright Copyright (c) 2016 FfS
 * @author Airat Sirazov
 * @link http://ffs.ru
 * @version v 1.0
 */

include_once $_SERVER['DOCUMENT_ROOT'].'\config.php';

// Загружаем Model
$loginRegistModel = $config->loadModel('Login_regist');

$loginRegistView = $config->loadView('login_regist');




