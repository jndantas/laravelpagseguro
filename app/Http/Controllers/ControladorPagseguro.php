<?php

namespace App\Http\Controllers;
use PagSeguro;

use Illuminate\Http\Request;

class ControladorPagseguro extends Controller
{
    public function action_boleto (Request $r) {
        $pagseguro = PagSeguro::setReference('1')
            ->setSenderInfo([
            'senderName' => 'Nome Completo', //Deve conter nome e sobrenome
            'senderPhone' => '(32) 1324-1421', //Código de área enviado junto com o telefone
            'senderEmail' => 'email@email.com',
            'senderHash' => $r->pagseguro_token,
            'senderCPF' => '68439758014' //Ou CNPJ se for Pessoa Júridica
            ])

            ->setItems([
            [
                'itemId' => '1',
                'itemDescription' => 'Teste',
                'itemAmount' => 10.00, //Valor unitário
                'itemQuantity' => '1', // Quantidade de itens
            ],
            ])
            ->send([
            'paymentMethod' => 'boleto'
            ]);
            dd($pagseguro);
    }
}
