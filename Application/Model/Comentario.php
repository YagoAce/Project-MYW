<?php

namespace App\Model;

class comentario extends \Core\Classes\Model
{
    protected $table = 'comentario';

    public function setDescricao(String $descricao)
    {
        $this->descricao = ucwords($descricao); 
    }

    public function setDataPostagem(String $dataPostagem)
    {
        $this->dataPostagem = trim(strtolower($dataPostagem));
    }

}