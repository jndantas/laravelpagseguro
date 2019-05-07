@extends('layouts.default')

@section('content')
    <h2 class="header">Checkout</h2>

    <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#step1">Suas informações</a></li>
        <li class="tab"><a href="#step2">Entrega</a></li>
        <li class="tab"><a href="#step3">Pagamento</a></li>
    </ul>

    <form action="/checkout/{{ $id }}" method="POST">
        {{ csrf_field() }}

        <input type="hidden" name="itemId1" value="0001">
        <input type="hidden" name="itemDescription1" value="Produto Pagseguro1">
        <input type="hidden" name="itemAmount1" value="250.00">
        <input type="hidden" name="itemQuantity1" value="2">

        <div id="step1">
            <p>Preencha suas informações</p>
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" id="senderName" name="senderName">
                    <label for="senderName">Nome Completo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="senderCPF" name="senderCPF">
                    <label for="senderCPF">CPF</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="senderEmail" name="senderEmail">
                    <label for="senderEmail">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input type="text" id="senderPhone" name="senderPhone">
                    <label for="senderPhone">Telefone</label>
                </div>
            </div>
        </div>
        <div id="step2">
            <p>Preencha os dados para Entrega</p>
        </div>
        <div id="step3">
            <p>Preencha os dados para Pagamento</p>
            <div class="row">
                <div class="input-field col s12">
                    <input type="submit" value="pagar" class="btn">
                </div>
            </div>
        </div>
    </form>

@endsection

@section('script')

@endsection