<?php

/**
 * Class Model
 * Author: Airat Sirazov
 * Version: 1.0
 */

class Model {

  public function __construct($modelName) {
    include_once $_SERVER['DOCUMENT_ROOT'].'\models' . '\\' . $modelName .'.php';
  }

  public function getUserData() {
    //echo "Get";
  }

}
