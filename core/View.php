<?php
/**
 * Class View
 * Author: Airat Sirazov
 * Version: 1.0
 */

class View {

  public function __construct ($viewName) {
    include_once $_SERVER['DOCUMENT_ROOT'] .'\views' . '\\' . $viewName . '.php';
  }

}
