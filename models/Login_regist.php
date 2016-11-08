<?php
/**
 * @copyright Copyright (c) 2016 FfS
 * @author Airat Sirazov
 * @link http://ffs.ru
 * @version v 1.0
 */

include_once $_SERVER['DOCUMENT_ROOT'].'\core\Model.php';
/*
 * Класс для обработки данных при регистрации
 * и последующего сохранения
 */
class Login_regist extends Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     * Проверка данных пользователя при сохранении
     * Если все норм сохраняем в БД
     */
    public function saveUserData($email, $password) {

        $email = htmlentities($email);
        if (!empty($email)) {
            // Проверка существования email в базе данных

        } else {
            $this->_error = 'Введите email';
        }

        /*$password = ;
        $validCode = ;
        $IPAdress = $_SERVER['REMOTE_ADDR'];
        $date = date();*/

    }

}