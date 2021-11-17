<?php
require '../vendor/autoload.php';

EasyRdf\RdfNamespace::set('rdf','http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf\RdfNamespace::set('bus','http://bus-usu.herokuapp.com/bus/ontology#');

$sparql = new \EasyRdf\Sparql\Client('https://erickyudha.github.io/public/bus.rdf');

$query = "SELECT ?s ?p ?o { ?s ?p ?o }";
$result = $sparql->query($query);

echo $result->dump();