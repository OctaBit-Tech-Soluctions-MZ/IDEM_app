<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDEM - Instituto Médio de Desenvolvimento e Empreendedorismo de Moçambique</title>
    <meta name="description"
        content="O IDEM é uma instituição dedicada à formação de qualidade, com cursos modernos e acessíveis em Moçambique.">
    <meta name="keywords" content="IDEM, ensino, educação, cursos, Moçambique, formação, instituição, Desenvolvimento, Empreendedorismo, Medio">
    <meta name="author" content="IDEM Moçambique">
    <meta property="og:title" content="IDEM - Instituto Médio de Desenvolvimento e Empreendedorismo de Moçambique">
    <meta property="og:description" content="Conheça os nossos cursos e formações profissionais.">
    <meta property="og:image" content="{{ asset('assets/img/logo_IDEM.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo_IDEM.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <style>
  .footer-newsletter .form-control {
    border-radius: 0.375rem 0 0 0.375rem;
  }

  .footer-newsletter .btn {
    border-radius: 0 0.375rem 0.375rem 0;
  }

  .footer-newsletter input::placeholder {
    color: #6c757d;
  }
</style>

</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('assets/img/logo_IDEM.png') }}" alt="IDEM - Logo">
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Início</a></li>
                    <li><a href="{{ route('about') }}">Sobre nós</a></li>
                    <li><a href="{{ route('contacts') }}">Contacto</a></li>
                    <li><a href="https://biblioteca.idem.ac.mz" target="_blank" rel="noopener" class="btn btn-primary px-2 py-1 me-1 text-white">Biblioteca</a></li>
                    <li><a href="https://idem.cosys.co.mz" target="_blank" rel="noopener" class="btn btn-primary px-2 py-1 pe-3 text-white">eDondzo</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background @yield('show', '')">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">IDEM</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li class="current">@yield('page', '')</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        @yield('content')
    </main>

    <footer id="footer" class="footer position-relative light-background shadow">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                        <span class="sitename ps-3 ps-sm-0">IDEM</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Av. Irmãos Ruby, N. 20, Paragem Farmácia, Xipamanine</p>
                        <p>Maputo, Moçambique</p>
                        <p class="mt-3">
                            <strong>Telefone:</strong> 
                            <a href="tel:+25884718770" class="text-white">+258 84/87 718 4770</a>
                        </p>
                        <p>
                            <strong>Email:</strong> 
                            <a href="mailto:info@idem.ac.mz" class="text-white">info@idem.ac.mz</a>
                        </p>
                    </div>


                    <div class="social-links d-flex mt-4">
                        <a href="https://www.facebook.com/Idem.maputo" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/ideminstitutomedio?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Início</a></li>
                        <li><a href="{{ route('about') }}">Sobre nós</a></li>
                        <li><a href="{{ route('contacts') }}">Contactos</a></li>
                        <li><a href="https://biblioteca.idem.ac.mz" target="_blank" rel="noopener">Biblioteca</a></li>
                        <li><a href="https://idem.cosys.co.mz" target="_blank" rel="noopener">eDondzo</a></li>
                        <li><a href="#">Termos de Serviço</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                </div>
{{-- 
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Serviços</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Desenvolvimento Web</a></li>
                        <li><a href="#">Gestão de Produtos</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Design Gráfico</a></li>
                    </ul>
                </div> --}}

                <div class="col-lg-4 col-md-6 footer-newsletter">
                <div class="p-4 bg-primary rounded shadow-sm h-100">
                    <h4 class="mb-3 text-light">Fique por dentro das novidades</h4>
                    <p class="text-light mb-4">
                    Receba novidades sobre cursos, eventos e oportunidades formativas diretamente no seu e-mail.
                    </p>
                    <form action="#" method="post" class="d-flex flex-column gap-2">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required>
                        <button class="btn btn-primary" type="submit">Subscrever</button>
                    </div>
                    </form>
                </div>
            </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>&copy; {{ date('Y') }} <strong class="px-1 sitename">IDEM</strong> - Todos os direitos reservados</p>
            <div class="credits text-white">
                Desenvolvido por Octabit 
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>