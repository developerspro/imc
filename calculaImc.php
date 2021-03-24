<?php 
 $nome = $_POST['nome'];
 $peso = $_POST['peso'];
 $altura = $_POST['altura'];
 $idade = $_POST['idade'];
 $idade = $_POST['idade'];

 include "Pessoa.php";
$paciente = new Pessoa();
$paciente->nome = "Robin";
$pes = new Pessoa();
$pes->nome = $nome;
$pes->peso = $peso;
$pes->altura = $altura;
$pes->idade= $idade;
$pes->calcularImc();
$pes->exibirImc();



