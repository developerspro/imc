<?php 

class Pessoa{
   public $nome;
   public $peso;
   public $altura;
   public $idade;
   public $imc;


   public function calcularImc(){
      $this->imc = $this->peso / ($this->altura*$this->altura);
   
   }

   public function exibirImc(){
       echo "<br>Boa noite,".$this->nome;
       echo "<br>Sua altura:".$this->altura;
       echo "<br>Seu peso:".$this->peso;
        echo "<br><h1>".$this->imc."</h1>";
   }
}

