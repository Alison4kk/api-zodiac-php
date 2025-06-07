<?php

function converter(string $moedaOrigem, string $moedaDestino, float $valor) {

  try {
    $json  = file_get_contents("https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies/{$moedaOrigem}.json");
    $dados = json_decode($json, true);
  }
  catch (Exception $e) {
    throw new Exception('Erro ao obter os dados de conversao: ' . $e->getMessage());
  }

  if (empty($dados)) {
    throw new Exception('Nao foi possível obter os dados de conversao para a moeda informada.');
  }

  if (!isset($dados[$moedaOrigem][$moedaDestino])) {
    throw new Exception('Moeda de destino nao encontrada.');
  }

  $fator           = $dados[$moedaOrigem][$moedaDestino];
  $valorConvertido = $valor * $fator;
  return $valorConvertido;
}
