<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public function index()
    {
        return view('site.dashboard');
    }

    // public function adm()
    // {
    //     // Recuperando o Id do funcionario na sessão
    //     $idFuncionario = session('id');
    //     // echo($idFuncionario); -Check

    //     // Buscando o funcionario pelo id no banco de dados
    //     $funcionario = Funcionario::find($idFuncionario);

    //     if(!$funcionario){
    //         abort(404, 'Funcionario não encontrado.');
    //         // Se o funcionario não foi encontrado
    //     }
    //     // echo($funcionario); - Check

    //     // Passando o objeto funcionario para a view
    //     return view('dashboard.adm.admin', compact('funcionario'));
    // }

    // public function aluno()
    // {
    //     // Recuperando o Id do Aluno na sessão
    //     $idAluno = session('id');
    //     // echo($idAluno); -Check

    //     // Buscando o aluno pelo id no banco de dados
    //     $aluno = Aluno::find($idAluno);

    //     if(!$aluno){
    //         abort(404, 'Aluno não encontrado.');
    //         // Se o aluno não foi encontrado
    //     }
    //     // echo($aluno); - Check

    //     // Passando o onjeto #aluno para a view
    //     return view('dashboard.aluno.aluno', compact('aluno'));


    // }
    public function funcionario()
    {
        return view('dashboard.funcionario.funcionario');
    }

}
