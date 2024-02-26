<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table ='tblusuarios';
    // A tabela associada a este modelo no banco de dados é chamada tblusuarios
    protected $primaryKey ='idUsuario';
    // A chave primária é idUsuario.


    public function tipoUsuario()
    { // Este método define uma relação inversa chamada 'tipoUsuario'

        return $this->morphTo('tipoUsuario', 'tipo_usuario_type', 'tipo_usuario_id');
        // Usando o morphTo indicando que essa tabela pode ser associada polimorficamente a várias outras tabelas com base nos meus campos
    }
}

