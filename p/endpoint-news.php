<?php
require '../vendor/autoload.php';

EasyRdf\RdfNamespace::set('rdf','http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf\RdfNamespace::set('foaf','http://xmlns.com/foaf/0.1/');
EasyRdf\RdfNamespace::set('geo','https://www.geonames.org/ontology#');
EasyRdf\RdfNamespace::set('ws','http://www.wisatasumut/ws/');
EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');

$graph = \EasyRdf\Graph::newAndLoad("https://rio-fransiskus.github.io/Wisata_Sumut/WisataSumut.rdf");

$allData = $graph->resourcesMatching('dc:title');

$allWisataData = array();

foreach ($allData as $data) {
  $wisataData = array();

  $wisataData['name'] = $graph->get($data,'dc:title');
  $wisataData['desc'] = $graph->get($data,'dc:description');
  $wisataData['price'] = $graph->get($data,'ws:price');
  $wisataData['phone'] = $graph->get($data,'foaf:phone');
  $wisataData['city'] = $graph->get($data,'geo:city');

  array_push($allWisataData, $wisataData);
  unset($wisataData);
};