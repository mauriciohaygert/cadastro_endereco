<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = false;
    protected $fillable = ['cep', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'uf'];
}
