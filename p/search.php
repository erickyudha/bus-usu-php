<?php
require_once './filter.php';
// CHOOSE 1 ENDPOINT FILE: endpoint.php or endpoint-sparql.php
require_once './endpoint-sparql.php';

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