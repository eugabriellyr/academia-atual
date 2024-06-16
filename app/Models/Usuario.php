<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable; // permite enviar notificações.
use Laravel\Sanctum\HasApiTokens; // Permite ao modelo gerar tokens de API utilizando o Laravel Sanctum.
 //Tive que colocar isso tbm

class Usuario extends Model
{
    use HasFactory;
    use HasApiTokens; // Com este trait, você pode chamar o método createToken no modelo Usuario para gerar um token de acesso.
    use Notifiable;  // Utilizar métodos como notify para enviar notificações ao usuário.


    protected $table ='tblusuarios';
    // A tabela associada a este modelo no banco de dados é chamada tblusuarios
    protected $primaryKey ='idUsuario';
    // A chave primária é idUsuario.


    protected $hidden = [
        'senhaUsuario', 'remember_token',
    ];
    // Especifica os atributos que devem ser escondidos nos arrays e JSONs gerados a partir do modelo.

    public function tipoUsuario()
    { // Este método define uma relação inversa chamada 'tipoUsuario'

        return $this->morphTo('tipoUsuario', 'tipo_usuario_type', 'tipo_usuario_id');
        // Usando o morphTo indicando que essa tabela pode ser associada polimorficamente a várias outras tabelas com base nos meus campos
    }
}

