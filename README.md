# fastparking-api

CRUD em API REST com PHP (POO)

API de registro em estacionamento.

Rotas para testar no Postman:

- localapi.fastparking.com.br/clientes (GET)
(retorna todos os cliente)

- localapi.fastparking.com.br/clientes (POST)
(insere cliente)

Entrada de dados:
{
    "nome_cliente": "nome",
    "placa_carro": "mcs 9000",
    "data_hora_entrada": "2023-09-30 10:00"
}

- localapi.fastparking.com.br/clientes/{id} (DELETE)
(atualiza inserindo horário de saída e valor)

- localapi.fastparking.com.br/precos (GET)
(retorna o último registro de preço)

- localapi.fastparking.com.br/precos (POST)
(insere preço)

Entrada de dados:
{
    "primeira_hora": 10,
    "demais_horas": 3
}