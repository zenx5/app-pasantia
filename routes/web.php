<?php
use App\Mail\Notificacion;
/*WEB PRINCIPAL*/

/*
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/','HomeController@index')->name('inicio');
Route::get('/welcome','WelcomeController@index')->name('welcome');


Route::bind('servicio',function($slug){
    return App\Servicio::where('slug',$slug)->first();
});

Route::bind('user', function($user){
    return App\User::find($user);
});


/*RUTAS DE LOGIN*/
Auth::routes();
/*Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );*/
Route::post('email','ResetPasswordController@resetPass')->name('email-password');
Route::post('email/reset','ResetPasswordController@update')->name('password-reset');

Route::get('precios','StoreController@index')->name('servicios');
Route::get('servicio/{slug}','StoreController@show')->name('servicio-detalle');

/*DETALLE DE PEDIDO VERIFICA SI EL USUARIO ESTA LOGEADO O NO */
Route::get('/detalle-pedido','CartController@detallePedido')->middleware('auth')->name('detalle-pedido');

/*RUTA CARRITO SERVICIO */
Route::get('/cart/show','CartController@show')->name('cart-show');
Route::get('/cart/add/{servicio}','CartController@add')->name('cart-add');
Route::get('/cart/delete/{servicio}','CartController@delete')->name('cart-delete');
Route::get('/cart/trash','CartController@trash')->name('cart-trash');

/*PAYPAL */
Route::get('/payment','PaypalController@postPayment')->name('payment');
Route::get('payment/status','PaypalController@getPaymentStatus')->name('payment.status');

/*TARJETA DE CREDITO*/

Route::get('addmoney/stripe','AddMoneyController@payWithStripe')->name('addmoney.paywithstripe');
Route::post('addmoney','AddMoneyController@postPaymentWithStripe')->name('addmoney.stripe');

/*RUTAS DE PLANES*/

//ADMINISTRADOR

    Route::get('/admin/home','Admin\HomeController@index')->name('admin-home');

    Route::get('admin/servicio','Admin\ServicioController@index')->name('servicio.index');
    Route::get('admin/servicio/create','Admin\ServicioController@create')->name('servicio.create');
    Route::post('admin/servicio','Admin\ServicioController@store');
    Route::get('admin/servicio/{servicio}/edit','Admin\ServicioController@edit')->name('servicio.edit');
    Route::put('admin/servicio/{servicio}','Admin\ServicioController@update');
    Route::delete('admin/servicio/{servicio}','Admin\ServicioController@destroy')->name('servicio.delete');

    Route::get('admin/user','Admin\UserController@index')->name('user.index');
    Route::get('admin/user/create','Admin\UserController@create')->name('user.create');
    Route::post('admin/user','Admin\UserController@store');
    Route::get('admin/user/{user}/edit','Admin\UserController@edit')->name('user.edit');
    Route::put('admin/user/{user}','Admin\UserController@update');
    Route::delete('admin/user/{user}','Admin\UserController@destroy')->name('user.delete');

    Route::get('admin/pedido','Admin\PedidoController@index')->name('pedido.index');
    Route::post('admin/pedido/get-items','Admin\PedidoController@getItems')->name('pedido.getItems');
    Route::delete('admin/pedido/{id}','Admin\PedidoController@destroy')->name('pedido.delete');

    // Aneli-Adrian

    Route::resource('micmac', 'MicmacController');

	Route::resource('mactor', 'MactorController');

	Route::resource('multipol', 'MultipolController');

	Route::resource('morphol', 'MorpholController');

	Route::resource('smic', 'SmicController');

    Route::resource('/admin/indicadores', 'Admin\IndicadoresController');

    Route::get('/admin/indicadores/inicio', 'Admin\IndicadoresController@inicio')->name('indicadores.inicio');



    // Roles y usuarios

    Route::resource('users', 'User1Controller');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('posts', 'PostController');

    Route::resource('compras', 'ComprasController');