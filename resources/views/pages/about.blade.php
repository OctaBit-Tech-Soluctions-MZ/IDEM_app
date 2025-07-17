@extends('components.layouts.app')
@section('page', 'Sobre Nós')
@section('content')

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

</section>
@endsection