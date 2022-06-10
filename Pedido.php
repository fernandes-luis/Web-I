<?php

    class Pedido{
        public $numero;
        public $cliente;
    }

    class Cliente{
        public $nome;
        public $endereco;
    }

    $cliente= new Cliente();
    $cliente->nome="Zeca";
    $cliente->endereco="Rua 7";

    $pedido= new Pedido();
    $pedido->cliente=$cliente;
    $pedido->numero=1234;

    $dado= array(
                'numero'=> $pedido->numero,
                'nome_cliente'=> $pedido->cliente->nome,
                'endereco_cliente'=> $pedido->cliente->endereco
    );

    //var_dump($dado);
    //echo $dado[numero], $dado[nome_cliente], $dado[endereco_cliente];

    //Imprimir informações do array
    foreach($dado as $dados){
        echo $dados;
    }
    ?>