var currentCoin = "eur";
// Optiene el nombre de la cripto con la primera letra en mayuscula
var currentCrypto = window.location.href.substring(window.location.href.lastIndexOf('/') + 1)
function getCurrentCrypto() {
  return currentCrypto.charAt(0).toUpperCase() + currentCrypto.slice(1);
}
// Crear la gráfica con Chart.js
var ctx = document.getElementById('realTimeChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Precio de '+getCurrentCrypto()+' (EUR)',
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

// Obtener el valor de la cripto en tiempo real y actualizar la gráfica
const interval = setInterval(function() {
  fetch("https://api.coingecko.com/api/v3/coins/"+currentCrypto+"?tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false")
  .then((response) => response.json())
  .then((json) => {
    var currentPrice = json.market_data.current_price[currentCoin];
    //Muestra el valor actual debajo de la gráfica
    document.getElementById("cryptoPrice").textContent = "Precio actual de "+getCurrentCrypto()+ " " + (currentCoin === "eur" ? "€" : "$") + currentPrice.toLocaleString();

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
}, 3500);
function changeCurrency() {
  // Cambiar los textos dependiendo de la moneda actual
  if (currentCoin === "eur") {
    currentCoin = "usd";
    myChart.data.datasets[0].label = 'Precio de '+getCurrentCrypto()+' (USD)'
    document.getElementById('toggleCurrency').innerText='Cambiar a euros'
  }
  else{
    currentCoin = "eur";
    myChart.data.datasets[0].label = 'Precio de '+getCurrentCrypto()+' (EUR)'
    document.getElementById('toggleCurrency').innerText='Cambiar a dólares'
  }

}
// Función click del botón
document.getElementById('toggleCurrency').addEventListener('click', changeCurrency);