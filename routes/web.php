<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/produtos', function () {
    return view('produtos');
})->middleware(['auth', 'verified'])->name('produtos');

Route::get('/produtos', function () {
    return view('fornecedores');
})->middleware(['auth', 'verified'])->name('fornecedors');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
    Route::get('/itens', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('/itens/create', [ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/itens', [ProdutoController::class, 'store'])->name('produto.store');
    Route::get('/itens/{produto}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::put('/itens/{produto}', [ProdutoController::class, 'update'])->name('produto.update');
    Route::delete('/itens/{item}', [ProdutoController::class, 'destroy'])->name('produto.destroy');

    Route::get('/itens', [FornecedorController::class, 'index'])->name('fornecedors.index');
    Route::get('/itens/create', [FornecedorController::class, 'create'])->name('fornecedor.create');
    Route::post('/itens', [FornecedorController::class, 'store'])->name('fornecedor.store');
    Route::get('/itens/{fornecedor}/edit', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
    Route::put('/itens/{fornecedor}', [FornecedorController::class, 'update'])->name('fornecedor.update');
    Route::delete('/itens/{item}', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy');

});

require __DIR__.'/auth.php';
