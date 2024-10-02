<?php

use App\Http\Controllers\comentarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\perfilController;
use App\Http\Controllers\vagasController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\candidatosController;

Route::fallback(function () { return redirect()->route('bem_vindo')->with('mensagem', 'Essa rota não existe'); });

Route::get('/', [MainController::class, 'bem_vindo'])->name('bem_vindo');

Route::get('/vaga/{id}', [vagasController::class, 'show'])->name('mostrarVaga');
Route::get('/perfil/{id}', [vagasController::class, 'perfilEmpregador'])->name('perfilEmpregador');

Route::get('/cadastro', [MainController::class, 'cadastroForm'])->name('cadastroForm');
Route::post('/cadastrando', [MainController::class, 'tratarCadastro'])->name('tratarCadastro');

Route::get('/login', [MainController::class, 'loginForm'])->name('loginForm');
Route::post('/logando', [MainController::class, 'login'])->name('logando');


Route::get('logout', function () { session()->flush(); return redirect()->route('bem_vindo'); })->name('logout');

Route::get("/BuscarCandidatos",[candidatosController::class,"BuscarCandidatos"])->name("BuscarCandidatos");

Route::get("/paginacaoDinamica",[perfilController::class,"paginacaoDinamica"])->name("paginacaoDinamica");
Route::post("/paginacaoDinamicaSubmit",[perfilController::class,"paginacaoDinamicaSubmit"])->name("paginacaoDinamicaSubmit");

//==================================================ROUTES FILTRAGEM=================================================

Route::get('/FiltrarVaga', [vagasController::class, 'FiltrarVaga'])->name('FiltrarVaga');
Route::post('/filtandoVaga', [MainController::class, 'filtandoVaga'])->name('filtandoVaga');

Route::get('/filtrarCandidatos', [candidatosController::class, 'filtrarCandidatos'])->name('filtrarCandidatos');
Route::post('/filtrandoCandidatos', [candidatosController::class, 'filtrandoCandidatos'])->name('filtrandoCandidatos');


//==================================================ROUTE VAGA=================================================

Route::get('/vaga', [vagasController::class, 'index'])->name('vagasCreate');
Route::post('/vaga', [vagasController::class, 'criarVaga'])->name('tratarVaga');

Route::get('/minhaVagas', [vagasController::class, 'minhaVagas'])->name('minhaVagas');
Route::get('/editarVaga/{id}', [vagasController::class, 'editarVaga'])->name('editarVaga');

Route::get('/pausarVaga/{id}', [vagasController::class, 'pausarVaga'])->name('pausarVaga');
Route::get('/ativarVaga/{id}', [vagasController::class, 'ativarVaga'])->name('ativarVaga');

Route::post('/editandoVaga', [vagasController::class, 'editarVagaSubmit'])->name('editarVagaSubmit');
Route::get('/deletarVaga/{id}', [vagasController::class, 'deletarVaga'])->name('deletarVaga');

//==================================================ROUTE COMENTARIO=================================================

Route::get("/Adicionar Comentario/{id}", [comentarioController::class,"AdicionarComentario"] )->name('Comentario');
Route::post("Adicionando Comentario/{id}", [comentarioController::class,"AdicionandoComentario"] )->name('AdicionandoComentario');

Route::get("meusComentarios", [comentarioController::class,"meusComentarios"] )->name('meusComentarios');

Route::get("editarComentario/{id}", [comentarioController::class,"editarComentario"] )->name('editarComentario');
Route::post("editandoComentario/{id}", [comentarioController::class,"editandoComentario"] )->name('editandoComentario');

Route::get("deletarComentario/{id}", [comentarioController::class,"deletarComentario"] )->name('deletarComentario');
Route::post("deletandoComentario/{id}", [comentarioController::class,"deletandoComentario"] )->name('deletandoComentario');

//==================================================ROUTE CANDIDATURA=================================================

Route::get('/candidatar/{id}', [perfilController::class, 'candidatarForm'])->name('candidatarForm');
Route::post("/tratarCandidatura/{id}",[perfilController::class,"tratarCandidatura"])->name("tratarCandidatura");

Route::get('/MinhasCandidaturas', [perfilController::class, 'MostrarCandidaturas'])->name('MostrarCandidaturas');

//==================================================ROUTE PERFIL=================================================

Route::get('/perfil', [perfilController::class, 'index'])->name('perfilUsuario');

Route::get('/editarCurriculo', [perfilController::class, 'editarCurriculo'])->name('editarCurriculo');

Route::get('/editarPerfil', [perfilController::class, 'editarPerfil'])->name('editarPerfil');
Route::post('/editandoPerfil', [perfilController::class, 'editarPerfilSubmit'])->name('editarPerfilSubmit');

Route::get('/excluirConta', [perfilController::class, 'excluirConta'])->name('excluirConta');

Route::get('/mudarSenha', [perfilController::class, 'mudarSenha'])->name('mudarSenha');
Route::post('/MudandoSenha', [perfilController::class, 'tratarMudarSenha'])->name('tratarMudarSenha');

Route::get("/pausar usuario",[perfilController::class,"pausar_usuario"])->name("pausar_usuario");
Route::get("/ativar usuario",[perfilController::class,"despausar_usuario"])->name("despausar_usuario");

Route::get("/Adicionar descrição",[perfilController::class,"adicionarDescricao"])->name("adicionarDescricao");
Route::post("/tratarDescricao",[perfilController::class,"tratarDescricao"])->name("tratarDescricao");

Route::get("/atualizar Descricao",[perfilController::class,"atualizarDescricao"])->name("atualizarDescricao");

Route::get("/ver Candidatos/{id}",[perfilController::class,"verCandidatos"])->name("verCandidatos");

Route::get('/ver-perfil-candidato/{id}', [perfilController::class, 'verPerfilCandidato'])->name('verPerfilCandidato');

// Route::get("/adicionar Foto",[perfilController::class,"adicionarFoto"])->name("adicionarFoto");


//==================================================ROUTE CHAT=================================================

Route::get('/chat', [ChatController::class, 'index'])->name('chat');

Route::post('/store Chat', [ChatController::class,'store'])->name('storeChat');

Route::get('/show Chat/{id}', [ChatController::class, 'show'])->name('showChat');

Route::post('/update Chat/{id}', [ChatController::class, 'update'])->name('updateChat');

Route::delete('/destroy Chat/{id}', [ChatController::class, 'destroy'])->name('destroyChat');
