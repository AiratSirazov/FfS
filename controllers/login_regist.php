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
$loginRegistModel->query("SELECT * FROM zixi_company_data WHERE id = 12");
//$loginRegistModel->query("SELECT name FROM zixi_company_data WHERE id = 12");

//$loginRegistView = $config->loadView('login_regist');




