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