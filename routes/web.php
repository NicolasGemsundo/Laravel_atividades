<?php

use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Models\Music;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (Request $request) {
    Log::info("Meu dado");
    return "Hello World";
});


Route::get('/albums', function () {
    $albuns = Album::all();
    return response()->json($albuns);
});

Route::get('/create-test-album', function () {
    $album = Album::create([
        'nome' => 'Abbey Road',
        'artista' => 'The Beatles',
        'ano_lancamento' => 1969,
        'url_imagem' => 'https://example.com'
    ]);

    return response()->json([
        'message' => 'Álbum criado com sucesso!',
        'album' => $album
    ]);
});
route:: get('/logado', function () {
    $logado = false;
    $nome = 'Nicolas';
    return view('ola',['logado' => $logado, 'nome' => $nome]);
});
route:: get('/ola', function () {
    $nome = 'Nicolas';
    return view('ola',['nome'=> $nome]);
});
Route::get('/lista', function () {
    $lista = ['Estudar Blade','Salvar o mundo','Dormir'];
    return view('Lista',['lista'=> $lista]);
});

