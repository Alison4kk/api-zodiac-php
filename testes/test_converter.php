<?php 
echo "Teste GET /converter 1\n";
$resposta = file_get_contents("http://api:8000/converter?origem=usd&destino=usd&valor=10");
$dados = json_decode($resposta, true);


assert($dados['moedaDestino'] === 'usd');
assert($dados['valor'] == 10);
assert($dados['valorConvertido'] == 10);

echo "OK.\n";


echo "Teste GET /converter 2\n";
$resposta = file_get_contents("http://api:8000/converter?origem=erro&destino=usd&valor=10");
$dados = json_decode($resposta, true);
echo "Resposta: " . json_encode($dados) . "\n";
assert(isset($dados['error']));

echo "Todos os testes passaram com sucesso.\n";


echo "Teste GET /servicos_financeiros 1\n";
$resposta = file_get_contents("http://api:8000/servicos_financeiros");
$dados = json_decode($resposta, true);
assert(is_array($dados));
assert(count($dados) > 0);

echo "Todos os testes passaram com sucesso.\n";