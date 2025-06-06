<?php 

echo "Teste GET /signos\n";

$response  = file_get_contents('http://localhost:8000/signo');
$dados = json_decode($response, true);

assert(count($dados) === 12, 'Deveria retornar 12 signos');

echo "Teste GET /signos - OK\n";