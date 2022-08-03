<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
$categorias[] = 'jovem de mais';
//print_r($categorias);
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo"O nome não pode ser vazio!!!";
    return;
}

if(strlen($nome) <= 3)
{
    echo"O nome deve conter mais de 3 caracteres!!!";
    return;
}

if(strlen($nome) > 40)
{
    echo"O nome deve conter no máximo 40 caracteres!!!";
    return;
}

if(is_numeric($nome))
{
    echo"Apenas letras são aceitas no campo nome!!!";
    return;
}
if(!is_numeric($idade))
{
    echo"Apenas números são aceitos no campo idade!!!";
    return;
}
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