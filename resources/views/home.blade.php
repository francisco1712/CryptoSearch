<!-- Plantilla -->
@extends('layout')
<!-- Contenido de la vista -->
@section('content')
    <main class="container my-5">
        <section>
        <h2 class="d-flex justify-content-center">Seleccione una criptomoneda</h2>
            <div class="form-group">
            <select id="criptomoneda" name="criptomoneda" class="form-control text-center text-light bg-dark">
                <option selected="selected" value="bitcoin">Bitcoin</option>
                <option value="ethereum">Ethereum</option>
                <option value="litecoin">Litecoin</option>
            </select>
            </div>
            <div class="text-center">
                <button id="formSubmit" class="btn btn-outline-dark">Mostrar valor</button>
            </div>

            
        </section>
        <section id="sectionCurrency">
            <h2 class="d-flex justify-content-center">Valor actual</h2>
            <p>El valor actual de la criptomoneda seleccionada es: <span id="valor"></span></p>
        </section>
        <div class="col">
            <canvas id="realTimeChart"></canvas>
            <button id='toggleCurrency' type="button" class="btn btn-primary">Cambiar a dólares</button>
            <p id="cryptoPrice"></p>
        </div>
    </main>
    <script>
        var currentCoin = "eur";
        var myChart=null;
        var interval=null;
        function getCurrentCrypto() {
            var coin = document.getElementById("criptomoneda").value;
            return coin.charAt(0).toUpperCase() + coin.slice(1);
        }
        function loadChart(coin){
            if (interval) {
                clearInterval(interval);
            }
            var ctx = document.getElementById('realTimeChart').getContext('2d');
            if (!myChart) {
                myChart = new Chart(ctx, {
                type: 'line',
                data: {
                labels: [],
                datasets: [{
                    label: "Precio actual de "+getCurrentCrypto()+ " " + (currentCoin === "eur" ? "(EUR)" : "(USD)"),
                    data: [],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1
                }]
                },
                options: {
                    scales : {
                        x: {
                            ticks: {
                                maxTicksLimit:10,
                                autoSkip: true,
                                display: true
                            }
                        }
                    },
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
            }
            
            myChart.data.datasets[0].data=[]
            myChart.data.labels=[]
            myChart.data.datasets[0].label="Precio actual de "+getCurrentCrypto()+ " " + (currentCoin === "eur" ? "(EUR)" : "(USD)");
            interval = setInterval(function() {
                fetch("https://api.coingecko.com/api/v3/coins/"+coin+"?tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false")
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
                setTimeout(function(){
                    myChart.update()
                },1000)
                });
            }, 1500);
 
        };
        // Esconde el botón de cambio de moneda hasta que se muestra la gráfica
        document.getElementById('toggleCurrency').style.visibility = 'hidden';
        document.getElementById('sectionCurrency').style.visibility = 'hidden';

        document.getElementById('formSubmit').addEventListener('click', function() {
            loadChart(document.getElementById("criptomoneda").value)
            document.getElementById('toggleCurrency').style.visibility = 'visible';
            document.getElementById('sectionCurrency').style.visibility = 'visible';
        });

        document.getElementById('criptomoneda').addEventListener('change', function() {
            console.log('You selected: ', this.value);
        });

        function changeCurrency() {
            // Cambiar los textos dependiendo de la moneda actual
            if (currentCoin === "eur") {
                currentCoin = "usd";
                document.getElementById('toggleCurrency').innerText='Cambiar a euros'
            }
            else{
                currentCoin = "eur";
                document.getElementById('toggleCurrency').innerText='Cambiar a dólares'
            }
            myChart.data.datasets[0].label = "Precio actual de "+getCurrentCrypto()+ " " + (currentCoin === "eur" ? "(EUR)" : "(USD)")

        }
        // Función click del botón
        document.getElementById('toggleCurrency').addEventListener('click', changeCurrency);

    </script>
@endsection