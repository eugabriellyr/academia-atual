<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //
    public function adm()
    {
        // Recuperando o Id do funcionario na sessão
        $idFuncionario = session('id');
        // echo($idFuncionario); -Check

        // Buscando o funcionario pelo id no banco de dados
        $funcionario = Funcionario::find($idFuncionario);

        if(!$funcionario){
            abort(404, 'Funcionario não encontrado.');
            // Se o funcionario não foi encontrado
        }
        // echo($funcionario); - Check

        // Passando o objeto funcionario para a view
        return view('dashboard.adm.admin', compact('funcionario'));
    }

    // Aluno
    public function indexFunc(){
        $idFunc = session('id');
        $funcionario = Funcionario::find($idFunc);

        $listaFunc = Funcionario::all();
        // dd($listaFunc);

        return view('dashboard.adm.func.index', compact('funcionario', 'listaFunc'));
    }

}
