<?php


function DefineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    $categorias[] = 'jovem de mais';

    if(ValidaNome($nome) and ValidaIdade($idade))
    {
        RemoverMenssagemDeErro();
        if($idade >= 6 and $idade <= 12)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    SetarMenssagemDeSucesso("O nadador $nome compete na categoria infantil!!!");
                    return null;
                }    
            }
        }
        else if($idade >= 13 and $idade <= 17)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    SetarMenssagemDeSucesso("O nadador $nome compete na categoria adolescente!!!");
                    return null;
                }    
            }
        }
        else if($idade >= 18 and $idade <= 59 )
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    SetarMenssagemDeSucesso("O nadador $nome compete na categoria adulto!!!");
                    return null;
                }    
            }
        }
        else if($idade >= 60)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'idoso')
                {
                    SetarMenssagemDeSucesso("O nadador $nome compete na categoria idoso!!!");
                    return null;
                }    
            }
        } 
        else
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'jovem de mais')
                {
                    SetarMenssagemDeSucesso("O nadador $nome é jovem de mais para competir!!!");
                    return null;
                }
            }
        }
    }
    else
    {
        RemoverMenssagemDeSucesso();
        return ObterMenssagemDeErro();
    }
}