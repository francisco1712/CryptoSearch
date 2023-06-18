<!-- Plantilla -->
@extends('layout')
<!-- Contenido de la vista -->
@section('content')

<main class="container my-5">
    <div class="container">
        <div class="row">
          <div class="col">
            <span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bitcoin_logo.svg/2560px-Bitcoin_logo.svg.png" alt="" style="width: 50%"></span>
            <div class="p-3">
                <p>
                    El <strong>Bitcoin</strong> es la primera criptomoneda descentralizada y la más conocida a nivel mundial. 
                    Fue creada en 2009 por una persona o grupo de personas bajo el seudónimo de Satoshi Nakamoto.
                </p>
                <p>
                    A diferencia de las monedas tradicionales, como el dólar o el euro, el Bitcoin no está respaldado por ningún gobierno o entidad central, y su funcionamiento se basa en una tecnología llamada blockchain.
                    La blockchain del Bitcoin es un registro público y distribuido que contiene todas las transacciones realizadas con esta criptomoneda.
                </p>
                <p>
                    Utiliza criptografía para garantizar la seguridad y la integridad de las transacciones. 
                    Además, el suministro de Bitcoin está limitado a 21 millones de unidades, lo que lo hace escaso y potencialmente valioso.
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