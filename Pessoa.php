<?php

Class Pessoa {

    public $nome;
    public $idade;

    public function MetodoPessoa(){
        echo "O nome é ". $this->nome. " e a idade é " .$this->idade;
    }

}

    $pessoa= new Pessoa;


    // A função var_dump () serve para debugar o objeto em questão
    //var_dump ($pessoa);   
    


    $pessoa->nome= "Antonio ADS";
    $pessoa->idade= 13;

    $pessoa->MetodoPessoa();

    //echo $pessoa->nome;

    //var_dump($pessoa);

    
?>
