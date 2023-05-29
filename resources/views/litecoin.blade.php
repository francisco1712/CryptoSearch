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
            <p id="cryptoPrice"></p>
          </div>
        </div>
</main>
<script>
  // Crear la gráfica con Chart.js
  var ctx = document.getElementById('realTimeChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [],
      datasets: [{
        label: 'Precio de Litecoin (EUR)',
        data: [],
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderWidth: 1
      }]
    },
    options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'El precio se actualiza cada 5 segundos'
      }
    }
  },
  });

  // Obtener el valor de la constante en tiempo real y actualizar la gráfica
  const interval = setInterval(function() {
    fetch("https://api.coingecko.com/api/v3/coins/litecoin?tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false")
    .then((response) => response.json())
    .then((json) => {
      var currentPrice = json.market_data.current_price.eur;
      //Muestra el valor actual debajo de la gráfica
      document.getElementById("cryptoPrice").textContent = "Precio actual de Litecoin: €" + currentPrice.toLocaleString();

      // Agregar el nuevo valor a la gráfica
      myChart.data.labels.push('');
      myChart.data.datasets[0].data.push(currentPrice);

      // Limitar la cantidad de puntos en la gráfica a 10
      if (myChart.data.labels.length > 10) {
        myChart.data.labels.shift();
        myChart.data.datasets[0].data.shift();
      }

      // Actualizar la gráfica
      myChart.update();
    });
  }, 5000);
</script>
@endsection