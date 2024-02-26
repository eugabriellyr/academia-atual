<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Primeira coisa criar a função index, se não nada carregará
    public function index()
    {
        return view('site.login');
        // Função index para nos retornar tudo que está no arquivo login, onde fica o html/formulário da pág
    }

    //Função autenticar
    public function autenticar(Request $request)
    {  //usando o request como parâmetro para  dados de solicitação
        $regras = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        // A variável $regras define um conjunto de regras de validação aos campos e serão aplicadas aos dados recebidos


        $msg = [
            'email.required' =>  'O campo de email é obrigatório',
            'email.email' => 'E-mail informado não é valido',
            'password' => 'O campo de senha é obrigatória'

        ];
        // A variável $msg determina a mensagem que irá ser mostrada dependendo de qual campo não foi preenchido corretamento por conta do "required"
        $request->validate($regras, $msg);

        // O método validate, do laravel para validar de acordo com as regras feitas

        $email = $request->get('email');
        $password = $request->get('password');
        //   Passamos os valores dos inputs para variaveis, utilizando o $requestpara obter o valor associado à ao campo

        // echo "Email: $email | Senha: $password";
        // echo "<br>";
        // Echo era para mostrar/testar após o submit


        $usuario = Usuario::where('emailUsuario', $email)->first();
        // Select na tabela usuarios, onde  checa se o os dados de e-mail fornecidos no formulário batem com o do banco

        if (!$usuario) {
            return back()->withErrors(['email' => 'Email não cadastrado']);
            // Se o email não existe volta com a mensagem de erro
        }

        if ($usuario->senhaUsuario != $password) {
            return back()->withErrors(['password' => 'Senha incorreta']);
            //Se o email existe então pegue o campo senha, se a senha não bater com email mostre a msg de erro
            // esse 'senhaUsuario vem do banco, ou seja o nome tem que estar igual'
        }
        // dd($usuario);


        $tipoUsuario = $usuario->tipoUsuario;
        // essa variável armazena o resultado do tipoUsuario, e pode receber valores diferentes
        //  dd($tipoUsuario);
        // Mostrar o tipo de usuario

        // $tipo = null;
        // Variavel tipo no inicio é nula


        // Checando se tipo usuario é uma instância de aluno
        if ($tipoUsuario instanceof Aluno) {
            // dd($tipoUsuario);

            // $tipo = 'aluno';
            // Se entrar entrar em aluno é aluno

            session([
                'id' => $tipoUsuario->idAluno,
                'nome' => $tipoUsuario->nomeAluno,
                'tipoUsuario' => 'aluno',
                'email' => $tipoUsuario->emailAluno,

            ]);
            // dd($_SESSION);

            return redirect()->route('dashboard.aluno.aluno');
            // Se tudo estiver correto recarregue a página do aluno



        } elseif ($tipoUsuario instanceof Funcionario) {
            // Checando se tipo usuario é uma instância de funcionario
            // dd($tipoUsuario);
            if ($tipoUsuario->tipoFuncionario == 'administrativo') {
                // dd($tipoUsuario);

                // $tipo = 'administrativo';
                // Se entrar entrar em administrativo é administrativo


                session([
                    'id' => $tipoUsuario->idFuncionario,
                    'nome' => $tipoUsuario->nomeFuncionario,
                    'tipoUsuario' => $tipoUsuario->tipoFuncionario,
                    'email' => $tipoUsuario->emailFuncionario,
                    'cargoFuncionario' => $tipoUsuario->cargoFuncionario

                ]);
                // dd($_SESSION);


                return redirect()->route('dashboard.adm.admin');
                // Se tudo estiver correto recarregue a página do funcionario

            } elseif ($tipoUsuario->tipoFuncionario == 'instrutores')
                // dd($tipoUsuario);

                // $tipo = 'instrutores';
            // Se entrar entrar em intrutores é intrutor

            session([
                'id' => $tipoUsuario->idFuncionario,
                'nome' => $tipoUsuario->nomeFuncionario,
                'tipoUsuario' => $tipoUsuario->tipoFuncionario,
                'email' => $tipoUsuario->emailFuncionario,
                'cargoFuncionario' => $tipoUsuario->cargoFuncionario
            ]);
            // dd($_SESSION);

            return redirect()->route('dashboard.funcionario.funcionario');
            // Se tudo estiver correto recarregue a página do funcionario
        }

        return back()->withErrors(['email' => 'Erro desconhecido']);

        // Casa ocorra um erro retorna a página e mostre a mensagem

    }
}


// $tipoUsuario = $usuario->tipo_usuario_type;

// // Checando se tipo usuario é aluno
// if ($tipoUsuario instanceof \Caminho\Para\O\Namespace\Aluno) {
//     dd($tipoUsuario);
// } elseif ($tipoUsuario instanceof \Caminho\Para\O\Namespace\Funcionario) {
//     // Checando se tipo usuario é funcionario
//     dd($tipoUsuario);
// } else {
//     dd('Cheguei aqui');
// }
