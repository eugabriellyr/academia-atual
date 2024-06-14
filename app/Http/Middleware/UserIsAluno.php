<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserIsAluno
{
    /**
     * Verifica se o usuário autenticado é um aluno.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->tipo_usuario_type === 'aluno') {
            return $next($request);
        }

        return response()->json(['data' => ['message' => 'Acesso negado. Somente alunos podem acessar esta área.']], 403);
    }
}
