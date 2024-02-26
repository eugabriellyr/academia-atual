<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;

class LogAcessoAcademia
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // return $next($request);

        // return Response('Cheguei aqui');] - Teste pra ver se cheguei
        // dd($request); - Trazer todas as informações da pág que foi requisitada, url, ip...

        $ip = $request->server->get('REMOTE_ADDR');
        $url =$request->getRequestUri();

        // dd($ip);

        LogAcesso::create(['log' => "IP: $ip Requisitou na rota: $url da nossa aplicação"]);

         return $next($request);
    }
}
// Middleware controla a resposta de requisição, nessa caso será ao contato para um teste, mas ao fim será para todas as páginas
// Estamos fazendo algumas gravações no banco com base no que o usuário está requisitando, onde gravamos no banco a URL e qual página foi requisitada

// Por fim toda página que acessarem será registradaq no banco, juntamente com o IP da máquina. 
