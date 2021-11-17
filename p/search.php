<?php
require_once './filter.php';
require_once './endpoint.php';

if (isset($_GET['from']) && !empty($_GET['from'])) {
  if (isset($_GET['to']) && !empty($_GET['to'])) {
    $viewData = filterDataByFromTo($allBusData, $_GET['from'], $_GET['to']);
  } else {
    $viewData = filterDataByFrom($allBusData, $_GET['from']);
  }
  
  echo "<pre>";
  var_dump($viewData);
  echo "</pre>";

} else {
  echo "no parameter detected";

};

?>