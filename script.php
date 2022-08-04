<?php

include "serviços/ServiçoCategoriaCompetidor.php";
include "serviços/ServiçoMenssagemSessao.php";
include "serviços/ServiçoValidaçao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

DefineCategoriaCompetidor($nome, $idade);

header('location: index.php');