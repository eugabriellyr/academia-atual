<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{ // Classe aluno sendo uma extensão do modelo
    use HasFactory;

    protected $table = 'tblalunos';
    // A tabela associada a este modelo no banco de dados é chamada tblalunos
    protected $primaryKey = 'idAluno';
    // A chave primária é idAluno.

    public function usuario()
    { // Este método define uma relação

        return $this->morphOne(Usuario::class, 'tipoUsuario');
        // Utilizada o morphOne que é usado para estabelecer relações polimórficas, onde o aluno pode  associação com a classe Usuario, usando o campo 'tipoUsuario'
    }
}
