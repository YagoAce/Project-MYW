<?php   

namespace App\Model;

class LocalDescarte extends \Core\Classes\Model
{
    protected $table = 'Local_Descarte';

    public function setEndereco(String $descricao)
    {
        $this->descricao = ($descricao); 
    }

    public function setTelefone(String $telefone)  
    {
        $this->telefone = ($telefone);
    }

    public function setInfo_adicionais(string $info_adicionais)
    {
        $this->info_adicionais = ($info_adicionais);
    }
}