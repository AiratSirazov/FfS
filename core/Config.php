<?php
/**
 * @copyright Copyright (c) 2016 FfS
 * @author Airat Sirazov
 * @link http://ffs.ru
 * @version v 1.0
 */

/**
 * Этот класс создает обьекты классов Model и View
 * и возврщает их обьекты
 */
class Config {

  // Функция принимает название модели
  public function loadModel ($modelFile) {
    // Подключение модели
    include_once $_SERVER['DOCUMENT_ROOT'].'\models' . '\\'. $modelFile .'.php';
    $model = new $modelFile;
    return $model;
  }

  // Функция принимает название отбражения
  public function loadView ($viewFile) {
    // Подключение View
    include_once $_SERVER['DOCUMENT_ROOT'].'\views' . '\\'. $viewFile .'.php';
    $view = new $viewFile;
    return $view;
  }

  // Загрузка библиотеки
  public static function loadLibrary($libFile) {
      // Загрузка кода библиотеки
      include_once $_SERVER['DOCUMENT_ROOT'].'\libs' . '\\'. $libFile .'.php';
      $lib = new $libFile;
      return $lib;
  }

  // Берем данные для подключения к БД из config
  public static function getDBData() {
      include $_SERVER['DOCUMENT_ROOT'] . '\config.php';
      $dbData = array('db_host' => $db_host, 'database' => $database, 'db_user' => $db_user, 'db_password' => $db_password);
      return $dbData;
  }

}
