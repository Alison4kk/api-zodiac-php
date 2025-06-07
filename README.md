# Currency Online API

API simples em PHP para conversão de moedas em tempo real.

## Funcionalidades

- Conversão de valores entre moedas utilizando dados atualizados.
- Endpoint de status para verificação de saúde da API.

## Endpoints

### `GET /status`

Retorna o status da API.

**Exemplo de resposta:**
```json
{ "status": "ok" }
```

### `GET /servicos_financeiros`
Retorna uma lista de serviços financeiros disponíveis.

**Exemplo de resposta:**
```json
{
  "servicos": [
    {
      "id_servico": "FIN_CONTA_DIGITAL_001",
      "nome_servico": "Conta Digital Inteligente",
      "descricao": "Conta corrente digital sem taxas, com rendimento automático e cartão de crédito integrado.",
      "publico_alvo": "Pessoas Físicas",
      "taxas_principais": "Gratuita para manutenção e transferências TED/PIX.",
      "beneficios_chave": [
        "Rendimento superior à poupança",
        "Cartão internacional",
        "Atendimento 24/7"
      ]
    },
    {
      "id_servico": "FIN_INVEST_P2P_002",
      "nome_servico": "Plataforma de Empréstimo P2P",
      "descricao": "Invista em empréstimos para pequenas empresas e obtenha retornos atrativos.",
      "publico_alvo": "Investidores e Pequenas Empresas",
      "taxas_principais": "Taxa de administração sobre o retorno do investimento.",
      "beneficios_chave": [
        "Diversificação de portfólio",
        "Apoio a negócios locais",
        "Potencial de alta rentabilidade"
      ]
    }
  ]
}
```

### `GET /converter`
Converte um valor de uma moeda para outra.

**Parâmetros:**
- `origem`: A moeda de origem (ex: "usd").
- `destino`: A moeda de destino (ex: "brl").
- `valor`: O valor a ser convertido.

**Exemplo de resposta:**
```json
{
  "moedaDestino": "brl",
  "valor": 10,
  "valorConvertido": 50,
  "valorConvertidoFormatado": "R$ 50,00"
}

```


## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/Alison4kk/currency-online-api.git
   cd currency-online-api
    ```

2. Iniciar container 
    ```bash
    docker compose up -d
    ```


3. Acesse a API em `http://localhost:8000`.

Ex.:
- http://localhost:8000/converter?origem=brl&destino=usd&valor=10
- http://localhost:8000/status