<?php

use App\Core\Controller;

class Clientes extends Controller{

    public function index(){
        $clienteModel = $this->model("Cliente");

        $clientes = $clienteModel->listarTodos();

        echo json_encode($clientes, JSON_UNESCAPED_UNICODE);
    }

    public function store(){

        $novoPreco = $this->getRequestBody();

        $clienteModel = $this->model("Cliente");
        $clienteModel->nomeCliente = $novoPreco->nome_cliente;
        $clienteModel->placaCarro = $novoPreco->placa_carro;
        $clienteModel->dataHoraEntrada = $novoPreco->data_hora_entrada;

        $precoModel = $this->model("Preco");

        $ultimoPreco = $precoModel->getUltimoInserido();

        $clienteModel->precoId = $ultimoPreco->id;

        $clienteModel = $clienteModel->inserir();

        if($clienteModel){
            http_response_code(201);
            echo json_encode($clienteModel);
        } else {
            http_response_code(500);
            echo json_encode(["erro" => "Problemas ao inserir"]);
        }
    }

}