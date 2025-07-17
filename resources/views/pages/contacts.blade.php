@extends('components.layouts.app')
@section('page', 'contactos')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
      background-color: #fff;
      padding: 20px;
    }
    .info-box {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .info-icon {
      background-color: #f1f7fe;
      border-radius: 50%;
      padding: 15px;
      margin-right: 15px;
    }
    .info-icon i {
      font-size: 24px;
      color: #007bff;
    }
    .info-text h5 {
      font-weight: bold;
    }
    .contact-container {
      border-top: 2px solid #3db3f3;
      border-bottom: 2px solid #3db3f3;
      padding: 30px 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .form-control {
      border-radius: 15;
      border: 1px solid #000 !important;
      box-shadow: none;
    }
    .btn-custom {
      background-color: #3db3f3;
      color: white;
      padding: 10px 30px;
      border-radius: 30px;
      border: none;
    }
    .btn-custom:hover {
      background-color: #33a3dc;
    }
  </style>

<!-- Contact Section -->
<section id="contact" class="contact section">

   <div class="container contact-container">
  <div class="row">
    <!-- Coluna da esquerda -->
    <div class="col-md-6 mb-4">
      <div class="info-box">
        <div class="info-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="info-text">
          <h5>Endereço</h5>
          <p>Av. Irmãos Ruby, N. 20, Paragem Farmácia, Xipamanine</p>
        </div>
      </div>
      <div class="info-box">
        <div class="info-icon">
          <i class="fas fa-phone"></i>
        </div>
        <div class="info-text">
          <h5>Ligue para nós</h5>
          <p>+258 874346576</p>
        </div>
      </div>
      <div class="info-box">
        <div class="info-icon">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="info-text">
          <h5>Envie-nos um e-mail</h5>
          <p>info@idem.com</p>
        </div>
      </div>
      <div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3587.439841729275!2d32.562580675418!3d-25.953611453815082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69b002a3ee957%3A0x4e5581cb9cf9097!2sFarm%C3%A1cia%20Mangueiras!5e0!3m2!1spt-PT!2smz!4v1751489729367!5m2!1spt-PT!2smz" 
        width="400" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
       </iframe>
      </div>
    </div>

    <!-- Coluna da direita -->
    <div class="col-md-6">
      <form>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Seu nome</label>
            <input type="text" class="form-control" placeholder="Digite seu nome">
          </div>
          <div class="col-md-6">
            <label class="form-label">Seu e-mail</label>
            <input type="email" class="form-control" placeholder="Digite seu e-mail">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Assunto</label>
          <input type="text" class="form-control" placeholder="Digite o assunto">
        </div>
        <div class="mb-3">
          <label class="form-label">Mensagem</label>
          <textarea class="form-control" rows="6" placeholder="Digite sua mensagem"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-custom">Enviar mensagem</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection