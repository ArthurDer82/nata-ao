<?php
    include "serviços/ServiçoMenssagemSessao.php";
 ?>   
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>formulário de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
 <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

 <form action="script.php" method="POST">
    <?php
        $menssagemDeSucesso = ObterMenssagemDeSucesso();
        if(!empty($menssagemDeSucesso))
        {
            echo $menssagemDeSucesso;
        }

        $menssagemDeErro = ObterMenssagemDeErro();
        if(!empty($menssagemDeErro))
        {
            echo $menssagemDeErro;
        }
    ?>
    <p>Seu nome: <input type="text" name="nome"></p>
    <p>Sua idade: <input type="text" name="idade"></p>
    <p><input type="submit" value="Enviar dados do competidor"></p>
</form>   
</body>   
</html>