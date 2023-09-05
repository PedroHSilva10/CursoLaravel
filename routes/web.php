<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::resource('products',ProductController::class);

Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');

/*
Route::get('/',[ProdutoController::class,'index'])->name('produto.index');

Route::get('/produto/{id?}',[ProdutoController::class,'show'])->name('produto.show');
*/
/*
Route::get('/', function () {
    return redirect()->route('admin.clientes');
});

Route::group(['prefix'=> 'admin', 'as' => 'admin.'],function(){
    

    Route::get('dashboard',function(){
        return "Dashboard";
    })->name('dashboard');
    
    Route::get('users', function(){
        return "Users";
    })->name('users');
    
    Route::get('clientes', function(){
        return "Clientes";
    })->name('clientes');
    
});
*/



/*
Route::get('/empresa',function(){
    return view('Empresa');
});


Route::view('/empresa', '/empresa');

Route::any('/any', function(){
    return "Permite todo tipo de acesso";
});

Route::match(['put','delete'],'/match',function(){
    return "Permite acessos definidos";
});

Route::get('/produto/{id}/{cat?}',function($id,$cat = "limpeza"){
    return "O id do produto é:".$id."<br>"."A categoria é:".$cat;
});

Route::get('/sobre',function(){
    return redirect('/empresa');
});


Route::redirect('/sobre','/empresa');

Route::get('/timesnownews',function(){
    return view('news');
})->name('noticias');

Route::get('/novidades',function(){
    return redirect()->route('noticias');
});
*/