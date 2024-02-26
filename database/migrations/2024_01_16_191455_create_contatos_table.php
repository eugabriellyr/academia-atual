<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeContato',100);
            $table->string('emailContato',100);
            $table->string('foneContato',15);
            $table->string('assuntoContato',100)->default('Contato Site');
            $table->text('msgContato');
            $table->timestamps();

            // Aqui é a criação dos campos da tabela contatos

        });
    }

};
