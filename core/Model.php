<?php
/**
 * @copyright Copyright (c) 2016 FfS
 * @author Airat Sirazov
 * @link http://ffs.ru
 * @version v 1.0
 */

class Model {

  public function __construct() {
      $db = Config::loadLibrary('Database');
      $db = new Database();
  }

  public function getUserData() {
    //echo "Get";
  }

}
