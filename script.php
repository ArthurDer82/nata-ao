<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
$categorias[] = 'jovem de mais';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['menssagem-de-erro'] = 'O nome não pode ser vazio!!! Por favor preencha novamente.';
    header('location: index.php');
    return;
}

else if(strlen($nome) <= 3)
{
    $_SESSION['menssagem-de-erro'] = 'O nome deve conter mais de 3 caracteres!!! Por favor preencha novamente.';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['menssagem-de-erro'] = 'O nome deve conter no máximo 40 caracteres!!! Por favor preencha novamente.';
    header('location: index.php');
    return;
}

else if(is_numeric($nome))
{
    $_SESSION['menssagem-de-erro'] = 'Apenas letras são aceitas no campo nome!!! Por favor preencha novamente.';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION['menssagem-de-erro'] = 'Apenas números são aceitos no campo idade!!! Por favor preencha novamente.';
    header('location: index.php');
    return;
}
if($idade >= 6 and $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            $_SESSION['menssagem-de-sucesso'] = "O nadador $nome compete na categoria infantil!!!";
            header("location: index.php");
            return;
        }    
    }
}
else if($idade >= 13 and $idade <= 17)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            $_SESSION['menssagem-de-sucesso'] = "O nadador $nome compete na categoria adolescente!!!";
            header("location: index.php");
            return;
        }    
    }
}
else if($idade >= 18 and $idade <= 59 )
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            $_SESSION['menssagem-de-sucesso'] = "O nadador $nome compete na categoria adulto!!!";
            header("location: index.php");
            return;
        }    
    }
}
else if($idade >= 60)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
        {
            $_SESSION['menssagem-de-sucesso'] = "O nadador $nome compete na categoria idoso!!!";
            header("location: index.php");
            return;
        }    
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'jovem de mais')
        {
            $_SESSION['menssagem-de-sucesso'] = "O nadador $nome é jovem de mais para competir!!!";
            header("location: index.php");
            return;
        }
    }
}