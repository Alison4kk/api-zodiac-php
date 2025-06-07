<?php

function servicosFinanceiros() {
  return [
    [
      "id_servico"       => "FIN_CONTA_DIGITAL_001",
      "nome_servico"     => "Conta Digital Inteligente",
      "descricao"        => "Conta corrente digital sem taxas, com rendimento automático e cartão de crédito integrado.",
      "publico_alvo"     => "Pessoas Físicas",
      "taxas_principais" => "Gratuita para manutenção e transferências TED/PIX.",
      "beneficios_chave" => [
        "Rendimento superior à poupança",
        "Cartão internacional",
        "Atendimento 24/7"
      ]
    ],
    [
      "id_servico"       => "FIN_INVEST_P2P_002",
      "nome_servico"     => "Plataforma de Empréstimo P2P",
      "descricao"        => "Invista em empréstimos para pequenas empresas e obtenha retornos atrativos.",
      "publico_alvo"     => "Investidores e Pequenas Empresas",
      "taxas_principais" => "Taxa de administração sobre o retorno do investimento.",
      "beneficios_chave" => [
        "Diversificação de portfólio",
        "Apoio a negócios locais",
        "Potencial de alta rentabilidade"
      ]
    ]
  ];
}
