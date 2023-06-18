<!-- Plantilla -->
@extends('layout')
<!-- Contenido de la vista -->
@section('content')
<main class="container my-5">
    <div class="container">
        <div class="row">
          <div class="col">
            <span class="p-3"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwt5x02CYKxGF278Lu2P__dN511x0B5GgTlA&usqp=CAU" alt="" style="width: 50%"></span>
            <div class="p-3">
                <p>
                    <strong>Ethereum</strong> es una plataforma de código abierto basada en blockchain que permite a los desarrolladores construir y desplegar aplicaciones descentralizadas (dApps). 
                    Fue propuesta por Vitalik Buterin en 2013 y lanzada en 2015. 
                    A diferencia de Bitcoin, que se centra en ser una moneda digital, Ethereum se enfoca en ejecutar contratos inteligentes.
                </p>
                <p>
                    La característica principal de Ethereum es su capacidad para ejecutar contratos inteligentes, que son programas informáticos que se ejecutan automáticamente cuando se cumplen ciertas condiciones predefinidas. 
                    Estos contratos inteligentes están basados en la tecnología blockchain, lo que significa que son transparentes, inmutables y seguros.                </p>
                <p>
                    La criptomoneda nativa de Ethereum se llama Ether (ETH). Ether se utiliza como combustible para ejecutar contratos inteligentes y realizar transacciones en la red. 
                    También se puede intercambiar en diferentes plataformas de intercambio de criptomonedas.                
                </p> 
            </div>
          </div>
          <div class="col">
            <canvas id="realTimeChart"></canvas>
            <button id='toggleCurrency' type="button" class="btn btn-primary">Cambiar a dólares</button>
            <p id="cryptoPrice"></p>
          </div>
        </div>
</main>
<script type="text/javascript" src="{{ URL::asset('price.js') }}"></script>
@endsection