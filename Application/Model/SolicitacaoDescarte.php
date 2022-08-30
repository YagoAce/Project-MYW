<?php

namespace App\Model;

class SolicitacaoDescarte extends \Core\Classes\Model 
{
    protected $table = 'solicitacao_descricao';

    public function setQuantidade(String $descricao)
    {
        $this->descrição = ($descricao);
    }

}

