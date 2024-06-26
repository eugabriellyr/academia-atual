<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Aula;
use App\Models\Funcionario;
use App\Models\Matricula;
use App\Models\Plano;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public $aluno;

    public function __construct(Aluno $aluno)
    {
        $this->aluno = $aluno;
    }

    public function index(Request $request){

        if($request->is('api/*')){
            $alunos = $this->aluno->all();
            return response()->json($alunos, 200);

        }else{
            return view('dashboard.alunos.index');
        }
    }

    public function show($id)
    {
        $aluno = Aluno::find($id);

        if (!$aluno) {
            return response()->json(['message' => 'Aluno não encontrado'], 404);
        }

        return response()->json($aluno, 200);
    }
    
    public function getMatricula($idAluno)
    {
        $matricula = Matricula::where('idAluno', $idAluno)->first();

        if(!$matricula){
            return response()->json(['message' => 'Aluno não encontrado'], 404);
        }

        return response()->json($matricula, 200);
    }

    public function getPlano($idAluno)
    {
        $matricula = Matricula::where('idAluno', $idAluno)->first();

        if(!$matricula){
            return response()->json(['message' => 'Aluno não encontrado'], 404);
        }

        $plano = Plano::find($matricula->idPlano);

        if(!$plano){
            return response()->json(['message' => 'Plano não encontrado'], 404);
        }

        return response()->json(['plano' => $plano], 200);
    }


    public function getAula($idAluno)
    {
        $matriculas = Matricula::where('idAluno', $idAluno)->pluck('idMatricula');

        if ($matriculas->isEmpty()) {
            return response()->json(['message' => 'Matricula não encontrada para o aluno.'], 404);
        }

        $aulas = Aula::whereExists(function ($query) use ($idAluno) {
            $query->select(DB::raw(1))
            ->from('tblAlunos')
            ->join('tblaulamatricula', 'tblalunos.idAluno', '=', 'tblaulamatricula.idAluno')
            ->whereColumn('tblaulamatricula.idAula', 'tblaulas.idAula')
            ->where('tblaulamatricula.idAluno', $idAluno);
        })->get();

        if($aulas->isEmpty()) {
            return response()->json(['message' => 'Aula não encontrada para o aluno.'], 404);
        }

        return response()->json(['aulas' => $aulas], 200);
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'emailUsuario' => 'required|email',
        'senhaUsuario' => 'required',
    ]);

    $usuario = Usuario::where('emailUsuario', $credentials['emailUsuario'])
                      ->where('senhaUsuario', $credentials['senhaUsuario'])
                      ->first();

    if ($usuario && $usuario->tipo_usuario_type == 'aluno') {
        $aluno = $usuario->tipoUsuario()->first();
        if ($aluno) {
            return response()->json([
                'message' => 'Login bem sucedido',
                'user' => [
                    'id' => $usuario->idUsuario,
                    'nome' => $usuario->nomeUsuario,
                    'email' => $usuario->emailUsuario,
                    'tipo' => $usuario->tipo_usuario_type,
                    'dados_aluno' => [
                        'idAluno' => $aluno->idAluno,
                        'nome' => $aluno->nomeAluno,
                    ],
                ],
                'access_token' => $usuario->createToken('auth_token')->plainTextToken,
                'token_type' => 'Bearer',
            ]);
        }
    }
    return response()->json(['data' => ['message' => 'Credenciais inválidas ou usuário não é um aluno']], 401);
}

}
