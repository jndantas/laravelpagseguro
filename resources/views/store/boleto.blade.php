@extends('layouts.default')

@section('content')
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
            function sl () {
                $('#pagseguro_token').val(PagSeguroDirectPayment.getSenderHash())
            }
    </script>

    <button onclick="sl();">GERAR Token</button>

    <form method="GET" action="{{ route('boleto_action') }}">
        <input type="text" id="pagseguro_token" name="pagseguro_token"/>
        <button type="submit">GERAR</button>
    </form>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    @endsection

    @section('script')
    @endsection
