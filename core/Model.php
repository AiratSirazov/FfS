<?php
/**
 * @copyright Copyright (c) 2016 FfS
 * @author Airat Sirazov
 * @link http://ffs.ru
 * @version v 1.0
 */

class Model {

  public $db = null;
  public function __construct() {
      $this->_db = Config::loadLibrary('Database');
  }

  public function getUserData() {
    //echo "Get";
  }

}
