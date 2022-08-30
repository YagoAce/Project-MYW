<?php   

namespace App\Model;

class Dicas extends \Core\Classes\Model
{
    protected $table = 'Dicas';

    public function setDescricao(String $descricao)
    {
        $this->descricao = ucwords($descricao); 
    }

    public function setDataPostagem(String $dataPostagem)
    {
        $this->dataPostagem = trim(strtolower($dataPostagem));
    }

    
}