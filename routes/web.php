<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/novo-cliente', function(Request $request) {
    Cliente::create([
        'cpf' => $request->cpf,
        'nome' => $request->nome,
        'data_nascimento' => $request->data_nascimento,
        'sexo' => $request->sexo,
        'endereco' => $request->endereco,
        'cidade' => $request->cidade,
        'estado' => $request->estado        
    ]);

    echo "Cliente cadastrado!";

    //dd($request->all());
});

Route::get('/mostrar-cliente/{cliente_id}', function ($cliente_id) {
    $cliente = Cliente::findOrFail($cliente_id);

    echo $cliente->cpf;
    echo "<br>";
    echo $cliente->nome;
    echo "<br>";
    echo $cliente->data_nascimento;
    echo "<br>";
    echo $cliente->sexo;
    echo "<br>";
    echo $cliente->endereco;
    echo "<br>";
    echo $cliente->cidade;
    echo "<br>";
    echo $cliente->estado;
    echo "<br>";
    
    //dd($cliente_id);
});


Route::get('/editar-cliente/{cliente_id}', function ($cliente_id) {
    $cliente = Cliente::findOrFail($cliente_id);
    return view('editar_cliente', ['cliente' => $cliente]);


    //dd($cliente_id);
});


Route::put('/atualizar-cliente/{cliente_id}', function (Request $request, $cliente_id) {
    $cliente = Cliente::findOrFail($cliente_id);
    
    $cliente->cpf = $request->cpf;
    $cliente->nome = $request->nome;
    $cliente->data_nascimento = $request->data_nascimento;
    $cliente->sexo = $request->sexo;
    $cliente->endereco = $request->endereco;
    $cliente->cidade = $request->cidade;
    $cliente->estado = $request->estado;

    $cliente->save();

    echo "Cliente atualizado!";

    //dd($cliente_id);
});