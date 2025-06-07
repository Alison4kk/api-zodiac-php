<?php

error_reporting(E_ERROR); // E_WARNING | E_PARSE | E_NOTICE);

require 'converter.php';

header('Content-Type: application/json');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/status') {
  echo json_encode(['status' => 'ok']);
  exit;
} 

if ($uri === '/converter' && $_SERVER['REQUEST_METHOD'] === 'GET') {

  $moedaOrigem = $_GET['origem'] ?? null;
  $moedaDestino = $_GET['destino'] ?? null;
  $valor = $_GET['valor'] ?? null;

  if (!$moedaOrigem || !$moedaDestino || !$valor || !is_numeric($valor)) {
    http_response_code(400);
    echo json_encode(['error' => 'Parametros invalidos']);
    exit;
  }

  try {
    $valorConvertido = converter($moedaOrigem, $moedaDestino, (float) $valor);
    $retorno = [
      'moedaDestino' => $moedaDestino,
      'valor' => $valor,
      'valorConvertido' => $valorConvertido,
      'valorConvertidoFormatado' => 'R$ ' . number_format($valorConvertido, 2, ',', '.'),
    ];
    echo json_encode($retorno);
  } catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
  }
  exit;
} 

http_response_code(404);
echo json_encode(['error' => 'Rota não encontrada']);