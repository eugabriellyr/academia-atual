<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { // Código para inicializar serviços/configurações

        //Estamos fazendo o carregamento dependendo se é aluno ou funcionário,
        Relation::morphMap([
            'aluno'       => 'App\Models\Aluno',
            'funcionario' => 'App\Models\Funcionario'

            // O método morphMap está mapeando os nomes 'aluno' e 'funcionario' para seus respectivos modelos
        ]);
    }
}


