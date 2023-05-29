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
        label: 'Precio de Ethereum (EUR)',
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
    fetch("https://api.coingecko.com/api/v3/coins/ethereum?tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false")
    .then((response) => response.json())
    .then((json) => {
      var currentPrice = json.market_data.current_price.eur;
      //Muestra el valor actual debajo de la gráfica
      document.getElementById("cryptoPrice").textContent = "Precio actual de Ethereum: €" + currentPrice.toLocaleString();

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