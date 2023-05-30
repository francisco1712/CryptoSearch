<!-- Plantilla -->
@extends('layout')
<!-- Contenido de la vista -->
@section('content')
    <main class="container my-5">
        <section>
        <h2 class="d-flex justify-content-center">Seleccione una criptomoneda</h2>
        <form>
            <div class="form-group">
            <label for="criptomoneda">Criptomoneda:</label>
            <select id="criptomoneda" name="criptomoneda" class="form-control">
                <option value="BTC">Bitcoin</option>
                <option value="ETH">Ethereum</option>
                <option value="LTC">Litecoin</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Mostrar valor</button>
        </form>
        </section>
        <section>
        <h2 class="d-flex justify-content-center">Valor actual de la criptomoneda seleccionada</h2>
        <p>El valor actual de la criptomoneda seleccionada es: <span id="valor"></span></p>
        <canvas id="myChart" width="400" height="400"></canvas>
        </section>
    </main>
@endsection