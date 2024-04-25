<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $table = 'tblplanos';

    protected $primaryKey = 'idPlano';

    protected $fillable = [
        'nomePlano',
        'descricaoPlano',
        'valorPlano',
        'statusPlano',
    ];

    // Relacionamento com Matricula
    public function matriculas()
    {
        return $this->hasMany(AulaMatricula::class, 'idPlano');
    }
}
