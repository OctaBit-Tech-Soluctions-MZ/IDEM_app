@extends('components.layouts.app')
@section('show', 'd-none')
@section('content')
<style>
/*--------------------------------------------------------------
# Area de Noticia
--------------------------------------------------------------*/
 .noticias-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .noticias-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 30px;
    }

    .noticias-header svg {
      width: 28px;
      height: 28px;
      color: #fff;
    }

    .noticias-header h2 {
      font-size: 28px;
      font-weight: bold;
      color: black;
    }

    .noticias-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 30px;
    }

    .noticia-principal img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .noticia-principal h3 {
      font-size: 22px;
      color: black;
      margin-bottom: 10px;
      transition: color 0.3s;
    }

    .noticia-principal h3:hover {
      text-decoration: underline;
      color: #0056b3;
    }

    .noticia-principal p {
      color: #555;
    }

    .noticia-lateral {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .noticia-lateral-item {
      display: flex;
      gap: 15px;
      align-items: center;
      background-color: #f2f7fc;
      padding: 10px;
      border-radius: 8px;
      transition: background-color 0.3s;
    }

    .noticia-lateral-item:hover {
      background-color: #e8f1fb;
    }

    .noticia-lateral-item img {
      width: 100px;
      height: 70px;
      object-fit: cover;
      border-radius: 6px;
    }

    .noticia-lateral-item a {
      font-size: 14px;
      color: #007BFF;
      text-decoration: none;
      font-weight: 500;
    }

    .noticia-lateral-item a:hover {
      text-decoration: underline;
    }

    .links-rapidos {
    display: flex;
    justify-content: center;
    background-color: #f2f7fc;
    padding: 20px 0;
    gap: 80px;
  }

  .link-item {
    text-align: center;
    font-family: sans-serif;
  }

  .link-item .icone {
    display: block;
    font-size: 22px;
    color: #007BFF;
    margin-bottom: 5px;
  }

  .link-item a {
    text-decoration: underline;
    font-size: 16px;
    color: #007BFF;
    font-weight: 500;
  }

  .link-item a:hover {
    color: #0056b3;
  }

    @media screen and (max-width: 768px) {
      .noticias-grid {
        grid-template-columns: 1fr;
      }
      .noticia-lateral-item {
        flex-direction: row;
      }
    }
     @media (max-width: 768px) {
    .links-rapidos {
      gap: 30px;
      padding: 30px 10px;
    }

    .link-item {
      width: 100px;
    }
  }

  @media (max-width: 480px) {
    .link-item {
      width: 100%;
    }

    .links-rapidos {
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }
</style>
<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="hero-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
                    <h1>Inspirando Excelência Através da Educação</h1>
                    <p>No Instituto Médio de Desenvolvimento e Empreendedorismo, 
                    oferecemos uma formação técnica de qualidade voltada para o 
                    mercado de trabalho. Com professores especializados e uma 
                    abordagem prática, preparamos os nossos estudantes para liderar, inovar e transformar o futuro.</p>
                    <div class="stats-row">
                        <div class="stat-item">
                            <span class="stat-number">96%</span>
                            <span class="stat-label">Taxa de emprego </span>
                        </div>

                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Programas</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 hero-media" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/learning.jpg') }}" alt="Education" class="img-fluid main-image">
                    <div class="image-overlay">
                        <div class="badge-accredited">
                            <i class="bi bi-patch-check-fill"></i>
                            <span>Excelência Acreditada</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-book-fill"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Currículo Inovador </h3>
                            <p>Oferecemos programas atualizados que combinam teoria e prática, 
                            alinhados às exigências do mercado de trabalho nacional e internacional.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card active">
                        <div class="feature-icon">
                            <i class="bi bi-laptop-fill"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Instalações modernas </h3>
                            <p>Salas equipadas, laboratórios especializados, biblioteca digital e 
                            espaços de aprendizagem colaborativa que garantem um ambiente educativo de excelência.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Corpo docente especializado </h3>
                            <p>Professores com experiência prática e formação superior, 
                            comprometidos com a qualidade de ensino e o sucesso dos nossos estudantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="upcoming-event" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
            <div class="event-content">
                <div class="event-date">
                    <span class="day">15</span>
                    <span class="month">NOV</span>
                </div>
                <div class="event-info">
                    <h3>Portas Abertas do proximo Semestre</h3>
                    <p>Junte-se a nós para explorar as instalações do campus, conhecer nosso corpo docente e
                        saber mais sobre oportunidades de bolsas de estudo.</p>
                </div>
                <div class="event-action">
                    <a href="#" class="btn-event">CONFIRME SUA PRESENCA AGORA</a>
                    <span class="countdown">Começa em 3 semanas</span>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Nossa história </h3>
                    <h2>Educando Mentes, Inspirando Corações</h2>
                    <p>O IDEM nasceu do sonho de dois jovens que acreditavam no poder da educação como instrumento para transformar a sociedade. Iniciou a sua actividade no bairro do Zimpeto, com recursos limitados, mas com uma grande ambição: formar, inspirar e fazer a diferença.
O crescimento foi notável. Em pouco tempo, foi necessário mudar para o Alto-Maé, onde o Instituto formou mais de 300 jovens. Em 2020, concretizou-se mais um grande passo com a instalação na actual sede, um edifício mais amplo e moderno, preparado para acolher um número crescente de estudantes.
Hoje, o IDEM orgulha-se de ter mais de 3.000 técnicos formados nas mais diversas áreas, tornando-se uma referência no ensino técnico e profissional em Moçambique. Com a realização de feiras, eventos educativos e acções comunitárias, o Instituto reafirma o seu compromisso com o desenvolvimento humano e social.</p>


                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="assets/img/Nos.jpg" alt="Campus" class="img-fluid rounded">

                    <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">
                        <div class="mission">
                            <h3>Nossa Missão</h3>
                            <p>Ser uma instituição de referência nacional, inovadora e inclusiva, que transforma e qualifica através de uma formação moderna e orientada para o mercado de trabalho.</p>
                        </div>

                        <div class="vision">
                            <h3>Nossa Visão</h3>
                            <p>Formar profissionais com conhecimento técnico e científico, preparados para transformar a sociedade e contribuir para o desenvolvimento socioeconómico.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="core-values" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-center mb-4">Valores Essenciais</h3>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                        <div class="col">
                            <div class="value-card">
                                <div class="value-icon">
                                    <i class="bi  bi-mortarboard"></i>
                                </div>
                                <h4>Competência</h4>
                                <p>Atuar com conhecimento, habilidade e dedicação, garantindo qualidade nos processos de ensino, aprendizagem, gestão e serviço à comunidade.</p>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="value-card">
                                <div class="value-icon">
                                    <i class="bi bi-award"></i>
                                </div>
                                <h4>Excelência</h4>
                                <p>Buscar continuamente os mais altos padrões de desempenho e qualidade, superando expectativas e consolidando uma cultura de melhoria contínua.</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="value-card">
                                <div class="value-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h4>Responsabilidade</h4>
                                <p>Assumir compromissos com ética, transparência e respeito pelas pessoas, pelo meio ambiente e pelo bem público.</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="value-card">
                                <div class="value-icon">
                                    <i class="bi  bi-lightbulb"></i>
                                </div>
                                <h4>Criatividade</h4>
                                <p>Estimular a inovação, a autonomia intelectual e a produção de soluções originais diante dos desafios contemporâneos da educação e da sociedade.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Area de Noticia-->


    <section class="noticias-container">
            <div class="noticias-header">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 10l-7 7-7-7" />
            </svg>
            <h2>Notícias</h2>
            </div>

            <div class="noticias-grid">
            <!-- Notícia Principal -->
            <div class="noticia-principal">
                <img src="./assets/img/img1.jpeg" alt="Imagem principal">
                <h3>IDEM dá Início ao Semestre com Aula de Abertura sobre Inovação e Desenvolvimento</h3>
                <p>
                Na manhã de segunda-feira, 7 de Julho, a IDEM realizou a sua aula inaugural do semestre académico, destacando temas centrais como inovação, empreendedorismo e desenvolvimento sustentável em Moçambique. 
                O evento contou com a presença de académicos, estudantes e parceiros estratégicos da instituição, reforçando o compromisso da IDEM com a formação de líderes transformadores e socialmente responsáveis.
                </p>

            </div>

            <!-- Notícias Laterais -->
        <div class="noticia-lateral">
        <div class="noticia-lateral-item">
            <img src="https://via.placeholder.com/120x80" alt="">
            <a href="#">IDEM lança programa de aceleração para jovens empreendedores</a>
        </div>
        <div class="noticia-lateral-item">
            <img src="https://via.placeholder.com/120x80" alt="">
            <a href="#">Parceria entre IDEM e Incubadora Digital fortalece inovação local</a>
        </div>
        <div class="noticia-lateral-item">
            <img src="https://via.placeholder.com/120x80" alt="">
            <a href="#">Estudantes da IDEM apresentam soluções tecnológicas para PMEs</a>
        </div>
        <div class="noticia-lateral-item">
            <img src="https://via.placeholder.com/120x80" alt="">
            <a href="#">IDEM promove ciclo de palestras sobre liderança e transformação social</a>
        </div>
        </div>
        <br/>
    </section>    
        <!-- /Area de Noticia--><br/>
        <div class="links-rapidos">
        <div class="link-item">
            <span class="icone"><i class="fas fa-user-graduate"></i></span>
            <a href="https://idem.cosys.co.mz" target="_blank">eDondzo</a>
        </div>
        <div class="link-item">
            <span class="icone"><i class="fas fa-laptop"></i></span>
            <a href="#">Secretaria</a>
        </div>
        <div class="link-item">
            <span class="icone"><i class="fas fa-database"></i></span>
            <a href="#">Repositório</a>
        </div>
        <div class="link-item">
            <span class="icone"><i class="fas fa-book"></i></span>
            <a href="https://biblioteca.idem.ac.mz" target="_blank">Biblioteca</a>
        </div>
        </div><br/>

@endsection