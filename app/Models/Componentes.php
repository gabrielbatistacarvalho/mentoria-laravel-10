<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentes extends Model
{
    use HasFactory;

    public function formatacaoMascaraDinheiroDecimal($valor)
    {
        $valor   = str_replace('.', '', $valor);
        $valor   = str_replace(',', '.', $valor);
        
        return $valor;
    }

    public function formatacaoMascaraCpf($cpf)
    {
        $cpf = str_replace('.', '', $cpf);
        $cpf = str_replace('-', '', $cpf);

        return $cpf;
    }
}
