<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //
    public function adm()
    {
        // Recuperando o Id do funcionario na sessão
        $idFuncionario = session('id');
        $idUsuario = session('idUsuario');

        // echo($idFuncionario); -Check

        // Buscando o funcionario pelo id no banco de dados
        $funcionario = Funcionario::find($idFuncionario);
        $usuario = Usuario::find($idUsuario);

        if(!$funcionario){
            abort(404, 'Funcionario não encontrado.');
            // Se o funcionario não foi encontrado
        }
        // echo($funcionario); - Check

        // Passando o objeto funcionario para a view
        return view('dashboard.adm.admin', compact('funcionario', 'usuario'));
    }

    // Funcionario
    public function indexFunc(){

        // Recuperando o Id do funcionario na sessão
        $idFuncionario = session('id');
        $idUsuario = session('idUsuario');

        // echo($idFuncionario); -Check

        // Buscando o funcionario pelo id no banco de dados
        $funcionario = Funcionario::find($idFuncionario);
        $usuario = Usuario::find($idUsuario);

        if(!$funcionario){
            abort(404, 'Funcionario não encontrado.');
            // Se o funcionario não foi encontrado
        }


        $listaFunc = Funcionario::where('statusFuncionario', 'ATIVO')->get();

        // dd($listaFunc);

        return view('dashboard.adm.func.index', compact('funcionario', 'listaFunc'));
    }

    // Carregar a página de cadastrar funcionario
    public function createFunc(){
        $idFunc = session('id');
        $funcionario = Funcionario::find($idFunc);

        if(!$funcionario){
            abort(404, 'Funcionario não encontrado.');
            // Se o funcionario não foi encontrado
        }

        return view('dashboard.adm.func.create', compact('funcionario'));
    }

    // REALIZAR O CADASTRO DO FUNCIONARIO
    public function cadFunc(Request $request){

       $request->validate([

        'nomeFuncionario'       => 'string|max:100',
        'emailFuncionario'      => 'email|max:100',
        'foneFuncionario'       => 'string|max:20',
        'enderecoFuncionario'   => 'string|max:255',
        'cidadeFuncionario'     => 'string|max:100',
        'estadoFuncionario'     => 'string|max:3',
        'cepFuncionario'        => 'string|max:8',
        'dataNasciFunc'         => 'string|max:100',
        'cargoFuncionario'      => 'string|max:100',
        'salarioFuncionario'    => 'string|max:255',
        'tipoFuncionario'       => 'string|in:administrativo,instrutores',
        'statusFuncionario'     => 'string|max:20',
        'obsFuncionario'        =>  'string|max:255',

       ]);


        $funcionario = new Funcionario();

        $funcionario->nomeFuncionario      = $request->input('nomeFuncionario');
        $funcionario->emailFuncionario     = $request->input('emailFuncionario');
        $funcionario->foneFuncionario      = $request->input('foneFuncionario');
        $funcionario->enderecoFuncionario  = $request->input('enderecoFuncionario');
        $funcionario->cidadeFuncionario    = $request->input('cidadeFuncionario');
        $funcionario->estadoFuncionario    = $request->input('estadoFuncionario');
        $funcionario->cepFuncionario       = $request->input('cepFuncionario');
        $funcionario->dataNasciFunc        = $request->input('dataNasciFunc');
        $funcionario->cargoFuncionario     = $request->input('cargoFuncionario');
        $funcionario->salarioFuncionario   =  $request->input('salarioFuncionario');
        $funcionario->tipoFuncionario      = $request->input('tipoFuncionario');
        $funcionario->statusFuncionario    = 'ATIVO';
        $funcionario->obsFuncionario       = $request->input('obsFuncionario');


        $funcionario->save();

        // Redireciona
        return redirect()->route('dashboard.adm.func.index')->with('success', 'Funcionário cadastrado com sucesso.');
            // dd($request->all());
            // dd('cheguei cad ');
            // Resto do seu código...



    // // Pega o último funcionário cadastrado
    // $ultimoFuncionario = Funcionario::latest('idFuncionario')->first();

    // // Verifica se encontrou algum funcionário anterior
    // if ($ultimoFuncionario) {
    //     // Incrementa o ID para obter o próximo
    //     $proximoID = $ultimoFuncionario->idFuncionario + 1;
    // } else {
    //     // Se não houver funcionários anteriores, define o próximo ID como 1
    //     $proximoID = 1;
    // }


    }
}
