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
        label: 'Precio de Bitcoin (EUR)',
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
    fetch("https://api.coingecko.com/api/v3/coins/bitcoin?tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false")
    .then((response) => response.json())
    .then((json) => {
      var currentPrice = json.market_data.current_price.eur;
      //Muestra el valor actual debajo de la gráfica
      document.getElementById("cryptoPrice").textContent = "Precio actual de Bitcoin: €" + currentPrice.toLocaleString();

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