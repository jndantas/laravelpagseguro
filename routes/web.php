<?php

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



Route::get('/checkout/{id}', function ($id) {
    return view('store.checkout', compact('id'));
});

Route::post('/checkout/{id}', function ($id) {
    $data = request()->all;
    unset($data['_token']);

    $data['email'] = 'jailton.dantass@gmail.com';
    $data['token'] = '';
    $data['paymentMode'] = 'default';
    $data['paymentMethod'] = 'creditCard';
    $data['recceiverEmail'] = '';
    $data['currency'] = 'BRL';

/*    $key = 1;
    foreach ($pedido->products as $produto) {
        $data['itemId' . $key] = $produto->id;
        $data['itemDescription'. $key] = $produto->title;
        $data['itemAmount'. $key] = number_format($produto->value, 2, '.', '');
        $data['itemQuantity'. $key] = $produto->qtd;
    }
**/

    $data['senderAreaCode'] = substr($data['senderPhone'], 0, 2);
    $data['senderPhone'] = substr($data['senderPhone'], 2, strlen($data['senderPhone']));

    return $data;
});

