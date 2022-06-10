<?php

    class Animal {

        public function Andar(){
            echo "Andando<br>";
        }
        public function Correr(){
            echo "Correndo";
        }

    }

    class Cavalo extends Animal{
        
        public function Andar(){
            echo "Cavalo andando<br>";
        }
        public function Correr (){
            $animal=new Animal();
            return $animal->Correr();
        }
    }

    //Chamando a função na superclasse
    $animal= new Animal();

    $animal->Andar();
    
    //Chamando a mesma função na classe filha, porém reescrita
    $cavalo=new Cavalo();

    $cavalo->Andar();

    //Chamando uma função na classe filha que retorna uma funcção da classe pai
    $cavalo->Correr();

    ?>