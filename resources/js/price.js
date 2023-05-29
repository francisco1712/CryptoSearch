// Obtener el contexto del canvas en el que se dibujará la gráfica
var ctx = document.getElementById('myChart').getContext('2d');

// Obtener los datos históricos de la criptomoneda desde la API de Coinbase
fetch('https://api.coinbase.com/v2/prices/BTC-USD/historic?period=day')
  .then(response => response.json())
  .then(data => {
    var prices = data.data.prices;
    var labels = [];
    var values = [];

    // Crear un array de etiquetas (fechas) y otro de valores
    prices.forEach(price => {
      labels.push(new Date(price.time).toLocaleDateString());
      values.push(price.price);
    });

    // Crear la gráfica con los datos obtenidos
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: 'Valor histórico de Bitcoin',
          data: values,
          borderColor: 'rgb(255, 99, 132)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        }
      }
    });
  });
