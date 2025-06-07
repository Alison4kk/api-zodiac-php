<?php

function servicosFinanceiros() {
  return json_decode(file_get_contents(__DIR__ . '/servicos.json'), true);
}
