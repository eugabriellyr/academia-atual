<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
use App\Http\Middleware\AutAcademiaMiddle;
use App\Http\Middleware\LogAcessoAcademia;
use App\Mail\ContatoEmail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    // return view('home');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

// route::middleware(LogAcessoAcademia::class)->get('/contato', [ContatoController::class, 'index'])->name('contato'); - Voltei com o normal pois não é mais preciso
// middleware controla a rota do contato, como teste de requisição

route::get('/contato', [ContatoController::class, 'index'])->name('contato');
route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
route::get('/noticias', [ NoticiasController::class, 'index'])->name('noticias');
route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
route::get('/treino',[TreinoController::class, 'index'])->name('treino');
route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

route::get('/sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
// rota para limpar a e voltar para a página home


// Sub-menus modalidade
route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
route::get('/modalidade/cardiovascular', [ModalidadeController::class, 'cardiovascular'])->name('modalidade.cardiovascular');
route::get('/modalidade/crossfit', [ModalidadeController::class, 'crossfit'])->name('modalidade.crossfit');
route::get('/modalidade/pilates', [ModalidadeController::class, 'pilates'])->name('modalidade.pilates');
route::get('/modalidade/yoga', [ModalidadeController::class, 'yoga'])->name('modalidade.yoga');
route::get('/modalidade/zumba', [ModalidadeController::class, 'zumba'])->name('modalidade.zumba');
route::get('/modalidade/box', [ModalidadeController::class, 'box'])->name('modalidade.box');
route::get('/modalidade/artes_marciais', [ModalidadeController::class, 'artes_marciais'])->name('modalidade.artes_marciais');
route::get('/modalidade/judo', [ModalidadeController::class, 'judo'])->name('modalidade.judo');

// Sub dahsboard
route::middleware(['autenticacao:administrativo'])->group(function(){
route::get('/dashboard/admin',[AdministradorController::class, 'adm'])->name('dashboard.adm.admin');

// ROUTES CRUD FUNCIONARIOS
route::get( 'dashboard/admin/funcionario', [AdministradorController::class, 'indexFunc'])->name('dashboard.adm.func.index'); //Listar
route::get('/dashboard/admin/funcionario/create',[AdministradorController::class, 'createFunc'])->name('dashboard.adm.func.create'); //Exibe o formulario de cadastro
route::post('/dashboard/admin/funcionario',[AdministradorController::class, 'cadFunc'])->name('dashboard.adm.func.cad'); //Processa o formulário de cadastro

// route::post('/dahsboard/admin/funcionario',[AdministradorController::class, 'cadFunc'])->name('dashboard.adm.func.cad'); //Processa o formulário de cadastro
route::get('/dashboard/admin/funcionario/{id}/edit',[AdministradorController::class, 'editFunc'])->name('dashboard.adm.func.edit'); //Editar
route::put('/dashboard/admin/funcionario/{id}/',[AdministradorController::class, 'updateFunc'])->name('dashboard.adm.func.update'); //Atualizar
route::put('/dashboard/admin/funcionario/{id}/',[AdministradorController::class, 'outdatedFunc'])->name('dashboard.adm.func.outdated'); //Desatualizar

});




// DASH
route::middleware(['autenticacao:aluno'])->group(function(){
route::get('/dashboard/aluno',[AlunoController::class, 'aluno'])->name('dashboard.aluno.aluno');

route::get( 'dashboard/aluno/perfil', [AlunoController::class, 'perfill'])->name('dashboard.aluno.perfil.perfill'); //Listar

});



route::middleware(['autenticacao:instrutores'])->group(function(){
route::get('/dashboard/funcionario',[FuncionarioController::class, 'funcionario'])->name('dashboard.funcionario.funcionario');
});





// route::post('/contatos/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contatos/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contatos/newsLetter', [ContatoController::class, 'salvarNoEmail'])->name('newsletter.salvar');
// certooooo



route::get('/login',[LoginController::class, 'index'])->name('login');
// Rota para o carregamento do método "index" que serve para mostrar as informações do site.login


route::post('/login',[LoginController::class, 'autenticar'])->name('login');
//Rota onde o método 'autenticar' do controlador será chamado para processar a solicitação post

