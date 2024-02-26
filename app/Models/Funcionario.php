<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $table = 'tblfuncionarios';
    // A tabela associada a este modelo no banco de dados é chamada tblfuncionarios
    protected $primaryKey = 'idFuncionario';
    // A chave primária é idFuncionario.

    public function usuario()
    { // Este método define uma relação

        return $this->morphOne(Usuario::class, 'tipoUsuario');
        // Utilizada o morphOne que é usado para estabelecer relações polimórficas, onde o funcionario pode  associação com a classe Usuario, usando o campo 'tipoUsuario'
    }
}
