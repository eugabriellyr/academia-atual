<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsLetter extends Model
{
    use HasFactory;

    protected $table = 'news_letters';
    // identificar a qual tabela

    protected $fillable = ['emailNews'];
    // identificar os campos
}
