<?php

namespace App\Model;

class residuo extends \Core\Classes\Model
{
    protected $table = 'Residuo';

    public function setTipo_residuo(String $tipo_Residuo)
    {
        $this->tipo_residuo = ($tipo_Residuo);
    }

    public function setTotal_descartado(String $total_descartado)
    {
        $this->total_descartado = ($total_descartado);
    }
}