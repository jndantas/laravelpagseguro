@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Pagseguro</span>
          <p>Olá, esse é o modo Checkout transparente do pagseguro, implementado no próprio site.</p>
        </div>
        <div class="card-action">
          <a href="/boleto">Via boleto</a>
          <a href="/checkout/1">Via cartão de crédito</a>
        </div>
      </div>
    </div>
  </div>

    @endsection

    @section('script')
    @endsection
