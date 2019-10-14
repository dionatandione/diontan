<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'endereco',
        'email'
        
    ];

}

