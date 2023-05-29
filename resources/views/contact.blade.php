<!-- Plantilla -->
@extends('layout')
<!-- Contenido de la vista -->
@section('content')
<main class="container">
    <section class="py-5">
      <h1 class="mb-4">Contáctanos</h1>
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="{{ route('contact') }}">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input name='name' type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input name='email' type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Mensaje</label>
              <textarea name='message' class="form-control" id="message" rows="5" placeholder="Ingresa tu mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
          </form>
        </div>
        <div class="col-md-6">
          <h3>Información de contacto</h3>
          <p>Si tienes alguna pregunta o consulta, no dudes en ponerte en contacto con nosotros. Estaremos encantados de ayudarte.</p>
          <ul>
            <li><strong>Teléfono:</strong> +123456789</li>
            <li><strong>Correo electrónico:</strong> info@cryptosearch.com</li>
            <li><strong>Dirección:</strong> Calle Principal, Granada, España</li>
          </ul>
        </div>
      </div>
    </section>
  </main>
@endsection