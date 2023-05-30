<!-- Plantilla -->
@extends('layout')
<!-- Contenido de la vista -->
@section('content')
<main>
    <section class="hero bg-primary text-white">
      <div class="container">
        <h1 class="display-4 d-flex justify-content-center">Sobre nosotros</h1>
        <p class="lead d-flex justify-content-center p-2">Aprende un poco más sobre nuestra empresa</p>
      </div>
    </section>
    <section>
        <div class="container">
            <p>Desde Cryptosearch nos consideramos unos apasionado por el mundo de las criptomonedas y la tecnología blockchain. Nuestro objetivo es proporcionar a los usuarios una forma sencilla y rápida de conocer el valor actual de diversas criptomonedas utilizando la API de Coinbase.</p>
            <p>En nuestra página web, puedes seleccionar la criptomoneda de tu interés y ver su valor en tiempo real. También te ofrecemos información detallada sobre cada criptomoneda, incluyendo su historia, equipo de desarrollo y tecnología subyacente.</p>
            <p>Estamos comprometidos en brindar una experiencia de usuario excelente y mantener actualizada nuestra plataforma para ofrecerte los datos más precisos y relevantes. ¡Gracias por utilizar nuestro servicio!</p>
      
        </div>
    </section>
    <section class="hero bg-primary text-white">
      <div class="container">
        <h2 class="display-4 d-flex justify-content-center">Nuestra misión</h2>
        <p class="lead d-flex justify-content-center p-2">Descubre cómo estamos transformando el mundo de las criptomonedas.</p>
      </div>
    </section>
    <section class="py-5">
      <div class="container">
        <p>Somos una plataforma dedicada a brindar información actualizada y confiable sobre el valor de las criptomonedas más populares. Nuestro objetivo principal es ayudar a los usuarios a tomar decisiones informadas y seguir el emocionante mundo de las criptomonedas de manera segura.</p>
        <p>Estamos comprometidos a proporcionar datos precisos y en tiempo real, así como a ofrecer una experiencia de usuario intuitiva y accesible para todos los niveles de conocimiento en criptomonedas.</p>
        
      </div>
    </section>
    <section class="hero bg-primary text-white">
      <div class="container">
        <h2 class="display-4 d-flex justify-content-center">El equipo detrás de todo</h2>
        <p class="lead d-flex justify-content-center p-2">Conoce a nuestros profesionales que hacen que Cryptosearch crezca cada día.</p>
      </div>
    </section>
    <section class="bg-light py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://t4.ftcdn.net/jpg/00/37/35/73/360_F_37357312_6GMQYcwMQwtw0N0s1NZ8bYogUv9buHHq.jpg" class="card-img-top" alt="Miembro del equipo 1" >
              <div class="card-body">
                <h5 class="card-title">Hugo Ferrer</h5>
                <p class="card-text">Cofundador y director ejecutivo</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://st3.depositphotos.com/4678277/18597/i/600/depositphotos_185974916-stock-photo-portrait-with-copy-space-empty.jpg" class="card-img-top" alt="Miembro del equipo 2">
              <div class="card-body">
                <h5 class="card-title">Rodrigo Soriano</h5>
                <p class="card-text">VP, Engineering</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://t3.ftcdn.net/jpg/02/22/10/62/360_F_222106228_NP5f0gXi3JOCgmaTsEyg7RuyKgwDLGuY.jpg" class="card-img-top" alt="Miembro del equipo 3">
              <div class="card-body">
                <h5 class="card-title">Aina Baeza</h5>
                <p class="card-text">Directora financiera</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection