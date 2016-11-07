<?php
/**
 * Class Config
 * Author: Airat Sirazov
 * Version: 1.0
 */

/**
 * Этот класс создает обьекты классов Model и View
 * и возврщает их обьекты
 */
class Config {

  // Функция принимает название модели
  public function loadModel ($model) {
    // Подключение модели
    include_once $_SERVER['DOCUMENT_ROOT'].'\core\Model.php';
    $model = new Model($model);
    return $model;
  }

  // Функция принимает название отбражения
  public function loadView ($view) {
    // Подключение View
    include_once $_SERVER['DOCUMENT_ROOT'].'\core\View.php';
    $view = new View($view);
    return $view;
  }

}
