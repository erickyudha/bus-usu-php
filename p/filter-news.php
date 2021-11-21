<?php
require_once './endpoint-news.php';

function filterWisataDataByCity($wisataData, $city) {
  $result = array();
  foreach ($wisataData as $data) {
    if (str_contains(strtolower($data['city']), strtolower($city))) {
      array_push($result, $data);
    };
  };
  return $result;
}