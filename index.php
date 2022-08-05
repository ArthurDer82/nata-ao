<?php
    include "serviços/ServiçoMenssagemSessao.php";
 ?>   
<!DOCTYPE html>
<html>
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
 <a>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</a>

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
    <h1>Seu nome: <input type="text" name="nome"></h1>
    <h2>Sua idade: <input type="text" name="idade"></h2>
    <h3><input type="submit" value="Enviar dados do competidor"></h3>
</form>   
</body>   
</html>