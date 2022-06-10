<?php

    class Produtos{

        public $nome;
        public $valor;
        public $quantidade;
    

    function __construct($nome,$valor,$quantidade){
        $this->nome=$nome;
        $this->valor=$valor;
        $this->quantidade=$quantidade;
    }
}

    class Carrinho{
        public $prodCar;
        public $total;
    

    public function Adicionar(Produtos $produto){
        $this->prodCar[]= $produto;
        //var_dump($prodCar);
    }
    public function Exibir(){
        foreach ($this->prodCar as $prod){
            echo "Nome do produto: " .$prod->nome. '<br>';
            echo "Valor do produto: ". $prod->valor. '<br>';
            echo "Quantidade de produtos: " .$prod->quantidade.'<hr>';
        }
    }
    public function Totalizar(){
        foreach ($this->prodCar as $prod){
            $this->total+=$prod->valor*$prod->quantidade;
        }
        echo "O valor total é de :".$this->total;
    }
}


  $produto1= new Produtos("computador", "2000", 3);
  $produto2=new Produtos("cebola", "12.5", 2);
  $produto3= new Produtos("Açaí", "10.5", 4);
  $produto4= new Produtos ("garrafa", "2.50", 20);
 
  
  $carrinho1= new Carrinho();

  $carrinho1->Adicionar($produto1);
  $carrinho1->Adicionar($produto2);
  $carrinho1->Adicionar($produto3);
  $carrinho1-> Adicionar($produto4);

  $carrinho1->Exibir();

  $carrinho1->Totalizar();


  // ATIVIDADE

    //Fazer gets e sets 
    //Função update (Na classe Produtos)

    //Função editar Carrinho (Classe carrinho)
?>

