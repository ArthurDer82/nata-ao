<?php
function ValidaNome(string $nome) : bool
{
    if(empty($nome))
    {
        SetarMenssagemDeErro('O nome não pode ser vazio!!! Por favor preencha novamente.');
        return false;
    }
    
    else if(strlen($nome) <= 3)
    {
        SetarMenssagemDeErro('O nome deve conter mais de 3 caracteres!!! Por favor preencha novamente.');
        return false;
    }
    
    else if(strlen($nome) > 40)
    {
        SetarMenssagemDeErro('O nome deve conter no máximo 40 caracteres!!! Por favor preencha novamente.');
        return false;
    }
    return true;
}

function ValidaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    { 
        SetarMenssagemDeErro('Apenas números são aceitos no campo idade!!! Por favor preencha novamente.');
        return false;
    }
    return true;
}