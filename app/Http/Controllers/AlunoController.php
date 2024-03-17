<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //

    public function aluno()
    {
        // Recuperando o Id do Aluno na sessão
        $idAluno = session('id');
        // echo($idAluno); -Check

        // Buscando o aluno pelo id no banco de dados
        $aluno = Aluno::find($idAluno);

        if(!$aluno){
            abort(404, 'Aluno não encontrado.');
            // Se o aluno não foi encontrado
        }
        // echo($aluno); - Check

        // Passando o onjeto #aluno para a view
        return view('dashboard.aluno.aluno', compact('aluno'));

    }

    public function perfill(){

         // Recuperando o Id do Aluno na sessão
         $idAluno = session('id');
         // echo($idAluno); -Check

         // Buscando o aluno pelo id no banco de dados
         $aluno = Aluno::find($idAluno);

         if(!$aluno){
             abort(404, 'Aluno não encontrado.');
             // Se o aluno não foi encontrado
         }
         // echo($aluno); - Check

         // Passando o objeto #aluno para a view
         return view('dashboard.aluno.perfil.index', compact('aluno'));

    }
}
