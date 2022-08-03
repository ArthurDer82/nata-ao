<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
$categorias[] = 'jovem de mais';
//print_r($categorias);
$nome = 'Arthur';
$idade = 15000;
//var_dump($nome);
//var_dump($idade);
if($idade >= 6 and $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ", $nome, " compete na categoria infantil!!!";
    }
}
else if($idade >= 13 and $idade <= 17)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ", $nome, " compete na categoria adolescente!!!";
    }
}
else if($idade >= 18 and $idade <= 59 )
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ", $nome, " compete na categoria adulto!!!";
    }
}
else if($idade >= 60)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
            echo "O nadador ", $nome, " compete na categoria idoso!!!";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'jovem de mais')
            echo "O nadador ", $nome, " é jovem de mais para competir!!!";
    }
}