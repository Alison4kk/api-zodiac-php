<?php

require_once 'signos.php';

header('Content-Type: application/json');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/status') {
  echo json_encode(['status' => 'ok']);
} else if ($uri === '/signos' && $_SERVER['REQUEST_METHOD'] === 'GET') {
  echo json_encode($signos);
} else {
  http_response_code(404);
  echo json_encode(['error' => 'Rota não encontrada']);
}