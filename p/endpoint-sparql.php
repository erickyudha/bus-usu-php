<?php
require '../vendor/autoload.php';

EasyRdf\RdfNamespace::set('rdf','http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf\RdfNamespace::set('bus','http://bus-usu.herokuapp.com/bus/ontology#');

$sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/bus-usu/sparql');

$result = $sparql->query(
  'SELECT DISTINCT ?s ?class ?facility ?price ?from ?to ?agName ?agTelp WHERE {'.
  '  ?s ?p ?o .' .
  '  ?s bus:rFrom ?from .'.
  '  ?s bus:rTo ?to .' .
  '  ?s bus:class ?class .' .
  '  ?s bus:price ?price .' .
  '  ?s bus:facility ?facility .' .
  '  ?s bus:agName ?agName .' .
  '  ?s bus:agTelp ?agTelp .' .
  '}'
);

$allBusData = array();

foreach ($result as $row) {
  $busData = array();

  $busData['class'] = $row->class;
  $busData['facility'] = $row->facility;
  $busData['price'] = $row->price;
  $busData['from'] = $row->from;
  $busData['to'] = $row->to;
  $busData['agName'] = $row->agName;
  $busData['agTelp'] = $row->agTelp;

  array_push($allBusData, $busData);
  unset($busData);
};