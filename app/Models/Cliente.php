<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'nome',
        'email'
    ];

    public function getClientesPesquisarIndex (string $search = '') 
    {
        $cliente = $this->where(function ($query) use ($search) {
            if ($search == true) {
                $query->where('nome', $search);
                $query->orWhere('nome', 'LIKE', "%{$search}%");
            }
        })->get();

        return $cliente;
    }
}
