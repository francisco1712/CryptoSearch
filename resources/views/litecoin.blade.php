<!-- Plantilla -->
@extends('layout')
<!-- Contenido de la vista -->
@section('content')
<main class="container my-5">
    <div class="container">
        <div class="row">
          <div class="col">
            <span class="p-3"><img src="https://altcoinsbox.com/wp-content/uploads/2022/12/full-litecoin-logo.png" alt="" style="width: 50%"></span>
            <div class="p-3">
                <p>
                    <strong>Litecoin</strong> es una criptomoneda descentralizada que fue creada por Charlie Lee en 2011 como una versión alternativa de Bitcoin. 
                    Se desarrolló con el objetivo de mejorar ciertos aspectos de Bitcoin, como la velocidad de transacción y la eficiencia en el proceso de minería.
                </p>
                <p>
                    Al igual que Bitcoin, Litecoin utiliza tecnología de cadena de bloques (blockchain) para realizar y verificar transacciones de forma segura. Sin embargo, hay algunas diferencias clave entre ambas criptomonedas. 
                    Por ejemplo, Litecoin tiene un tiempo de bloque más rápido y utiliza un algoritmo de minería diferente llamado "Scrypt", lo que lo hace más accesible para los mineros.
                <p>
                    Litecoin ha ganado popularidad debido a su implementación de mejoras técnicas y su enfoque en la rapidez de las transacciones. 
                    Se considera una opción viable para pagos cotidianos, ya que las transacciones de Litecoin suelen confirmarse más rápidamente que las de Bitcoin
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