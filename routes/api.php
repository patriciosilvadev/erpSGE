<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'as' => 'api.'], function(){
    Route::name('login')->post('login', 'AuthController@login');
});

Route::group(['namespace' => 'Cad', 'as' => 'cad.' ], function (){


    Route::group(['middleware' => 'auth:api'], function(){
        Route::resource('users', 'UserController', ['except' => ['create', 'edit']]);

//    **** EMPESA ***
    Route::resource('empresas', 'EmpresaController', ['except' => ['create', 'edit']]);

//    **** PESSOAS ***
    Route::resource('pessoadependentetipos', 'PessoaDependenteTipoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoaemails', 'PessoaEmailController', ['except' => ['create', 'edit']]);
    Route::resource('pessoaenderecos', 'PessoaEnderecoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoagrupos', 'PessoaGrupoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoatelefones', 'PessoaTelefoneController', ['except' => ['create', 'edit']]);
    Route::resource('pessoadoctotipos', 'PessoaDoctoTipoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas', 'PessoaController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.grupos', 'PessoaPessoaGrupoController', ['only' => ['index', 'store', 'destroy']]);
    Route::resource('pessoas.doctos', 'PessoaPessoaDoctoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.telefones', 'PessoaPessoaTelefoneController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.emails', 'PessoaPessoaEmailController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.enderecos', 'PessoaPessoaEnderecoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.dependentes', 'PessoaPessoaDependenteController', ['except' => ['create', 'edit']]);
    Route::patch('pessoas/{pessoa}/restore','PessoaController@restore');

// *** outros
    Route::resource('planocontas', 'PlanocontaController', ['except' => ['create', 'edit']]);
    Route::resource('cctipos', 'CcTipoController', ['except' => ['create', 'edit']]);
    Route::resource('ccs', 'CcController', ['except' => ['create', 'edit']]);
    Route::resource('ccbancos', 'CcBancoController', ['except' => ['create', 'edit']]);
    Route::resource('ccbancocobrancas', 'CcBancoCobrancaController', ['except' => ['create', 'edit']]);

//  *** PRODUTOS ****
    Route::resource('produtogrupos', 'ProdutoGrupoController', ['except' => ['create', 'edit']]);
    Route::resource('produtos', 'ProdutoController', ['except' => ['create', 'edit']]);
    Route::resource('produtos.grupos', 'ProdutoProdutoGrupoController', ['only' => ['index', 'store', 'destroy']]);

//    **** MOV ***
    Route::resource('natoperacao', 'MovNatOperacaoController', ['except' => ['create', 'edit']]);
    Route::resource('formapgtipos', 'FormapgTipoController', ['except' => ['create', 'edit']]);
    Route::resource('formapgparcelas', 'FormapgParcelaController', ['except' => ['create', 'edit']]);
    Route::resource('formapgs.parcelas', 'FormapgFormapgParcelaController', ['except' => ['create', 'edit']]);
    Route::resource('formapgs', 'FormapgController', ['except' => ['create', 'edit']]);
//   ***** Grupo mov
     Route::group(['namespace' => 'Mov', 'as' => 'mov.' ], function (){
         Route::resource('movs', 'MovController', ['except' => ['create', 'edit']]);
 });

});


});
