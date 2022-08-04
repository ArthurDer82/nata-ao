<?php

session_start();

function SetarMenssagemDeErro(string $menssagem) : void
{
    $_SESSION['menssagem-de-erro'] = $menssagem;
}

function ObterMenssagemDeErro() : ?string
{
    if(isset($_SESSION['menssagem-de-erro']))
        return $_SESSION['menssagem-de-erro'];

    return null;
}

function SetarMenssagemDeSucesso(string $menssagem) : void
{
    $_SESSION['menssagem-de-sucesso'] = $menssagem;
}

function ObterMenssagemDeSucesso() : ?string
{
    if(isset($_SESSION['menssagem-de-sucesso']))
        return $_SESSION['menssagem-de-sucesso'];

    return null;
}

function RemoverMenssagemDeErro() : void
{
    if(isset($_SESSION['menssagem-de-erro']))
        unset($_SESSION['menssagem-de-erro']);
}

function RemoverMenssagemDeSucesso() : void
{
    if(isset($_SESSION['menssagem-de-sucesso']))
        unset($_SESSION['menssagem-de-sucesso']);
}