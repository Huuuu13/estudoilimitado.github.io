<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ei Fórum de Estudos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ei
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Ei<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="index.php"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="sobre.php">Sobre</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="materias.php">Matérias</a></li>
          <li><a class="nav-link scrollto" href="artigos.php">Artigos</a></li>
          <li><a class="nav-link scrollto" href="professores.php">Professores</a></li>
          <li><a class="nav-link scrollto" href="forum.php">Fórum</a></li>
          
          <!--
          <li class="dropdown"><a href="#"><span>Ensino</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Jogos Interativos</a></li>
              <li class="dropdown"><a href="#"><span>Ensino Infantil</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Historinhas</a></li>
                  <li><a href="#">Interatividades</a></li>
                  <li><a href="#">Jogos Educativos</a></li>
                  <li><a href="#">Artes & Artesanatos</a></li>
                  <li><a href="#">Vídeo Aulas Criativas</a></li>
                </ul>
              </li>
              <li><a href="#">1° ao 5° Ensino Fundamental</a></li>
              <li><a href="#">6° ao 9° Ensino Fundamental</a></li>
              <li><a href="#">1° 2° 3° Ensino Médio</a></li>
            </ul>
          </li>
          -->

          <li><a class="nav-link scrollto" href="cadastro_usuario.html">Cadastro</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
    // Certifique-se de iniciar a sessão
          session_start();

          // Verificar se o usuário está autenticado e exibir o botão apropriado
          if (isset($_SESSION['email'])) {
              // Verificar o tipo de usuário
              if ($_SESSION['tipo_usuario'] == 'aluno') {
                  echo '<a href="cadastro_login/usuario/perfil_usuario.php" class="get-started-btn scrollto">Perfil</a>';
              } elseif ($_SESSION['tipo_usuario'] == 'professor') {
                  echo '<a href="cadastro_login/usuario/perfil_professor.php" class="get-started-btn scrollto">Perfil</a>';
              } else {
                  // Tipo desconhecido, tratar de acordo com a lógica do seu aplicativo
                  echo '<a href="#" class="get-started-btn scrollto">Perfil</a>';
              }
          } else {
              echo '<a href="login_usuario.html" class="get-started-btn scrollto">Login</a>';
          }
      ?>

    </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Pergunte ao Especialista<span>.</span></h1>
          <h2>Encontre aqui especialistas para sanar suas dúvidas</h2>
        </div>
      </div>

      <!--<p></p>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="get-started-btn" type="submit">Buscar</button>
          </form>
        </div>
      </div> -->

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <a href="materias.php #portugues">
            <div class="icon-box">
              <i class="bi-book"></i>
              <h3>Português</a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <a href="materias.php #historia">
            <div class="icon-box">
              <i class="bi-bank"></i>
              <h3>História</a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <a href="materias.php #matematica">
            <div class="icon-box">
              <i class="bi-calculator"></i>
              <h3>Matemática</a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <a href="materias.php #geografia">
            <div class="icon-box">
              <i class="bi-binoculars"></i>
              <h3>Geografia</a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <a href="materias.php #ciencias">
            <div class="icon-box">
              <i class="bi-bug"></i>
              <h3>Ciências</a></h3>
            </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Sobre Estudo ILimitado</h3>
            <p class="fst-italic">
              Somos uma organização com a missão de oferecer uma educação gratuita de alta qualidade para qualquer pessoa, em qualquer lugar.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Contamos com uma equipe incrível de professores e colaboradores focados no sucesso 
                                                        dos alunos. Nossa história começou em 2023, com aulas gratuitas online. Depois, fomos 
                                                        conquistando professores alunos e ampliando nossa área de atuação.</li>
              <li><i class="ri-check-double-line"></i> O Estudo ILimitado  é uma plataforma completa de ensino online. Por isso, oferecemos, 
                                                        tendo diversas áreas de conhecimentos do ensino fundamental e medio , conteúdos 
                                                        divididos de acordo com cada disciplina, tera os contatos dos professores que voce 
                                                        deseja escolher e  livros didatico. </li>
            </ul>
            <p>
              O melhor de tudo é  que as aulas e os professores que escolherem para lecionar são de forma 
              gratuita com isso, voce pode usar o site á qualquer momento numa boa.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-11.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-12.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-13.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-14.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-15.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Ferramentas para a capacitação de professores</h4>
              <p>
                Com o Ensino Ilimitado, os professores conseguem identificar as dificuldades de compreensão de 
                seus alunos, personalizar instruções e atender às necessidades de cada um deles e os 
                alunos podendo escolher o professor que deseja.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Aprendizagem personalizada</h4>
              <p>Os alunos praticam no próprio ritmo, podendo escolher o professor que deseja 
                e solucionando suas dificuldades de compreensão e, depois, acelerando o aprendizado.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Conteúdo confiável</h4>
              <p>A biblioteca do Ensino Ilimitado de prática e lições confiáveis abrange matemática, ciências 
                e muito mais e professores qualificados. Sempre gratuita para alunos e professores.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Matérias</h2>
          <p>Veja quais as Matérias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href="materias.php #portugues">
              <div class="icon"><i class="bi-book"></i></div>
              <h4>Português</a></h4>
              <p>É uma tipologia textual marcada por aspectos linguísticos que envolvem a exposição de características e 
                propriedades de um objeto, pessoa, animal ou acontecimento.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <a href="materias.php #matematica">
              <div class="icon"><i class="bi-calculator"></i></div>
              <h4>Matemática</a></h4>
              <p>Conhecimento que envolve o estudo da aritmética, álgebra, geometria, trigonometria, estatística e cálculo.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <a href="materias.php #ciencias">
              <div class="icon"><i class="bi-bug"></i></div>
              <h4>Ciências</a></h4>
              <p>Estudo exclusivo dos fatores de ordem naturalmente físicas, desconsiderando aspectos 
                e mudanças proporcionadas pelo comportamento dos seres vivos.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href="materias.php #historia">
              <div class="icon"><i class="bi-bank"></i></div>
              <h4>História</a></h4>
              <p>Engloba todo o  conhecimento que estuda as ocorrências do passado do jeito que ela é contada, 
                porque vai dos personagens, pelos cenários e até às ações.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <a href="materias.php #geografia">
              <div class="icon"><i class="bi-binoculars"></i></div>
              <h4>Geografia</a></h4>
              <p>É a ciência cujo objeto de estudo é o espaço geográfico e as relações nele estabelecidas.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <a href="materias.php">
              <div class="icon"><i class="bi-boxes"></i></div>
              <h4>Outras</a></h4>
              <p>Inglês, Química, Espanhol, Biologia, Gramática, Filosofia, Educação Física, 
                Italiano, Física, Artes, Redação, Sociologia, Curiosidades, Etc...</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Você pode aprender qualquer coisa.</h3>
          <p> Desenvolva um aprendizado sólido e profundo em matemática, ciências e muito mais.</p>
          <a class="cta-btn" href="cadastro_usuario.html">Alunos, comecem aqui</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Artigos ======= -->
    <section id="team" class="team">
      <div class="container">

          <?php
            //chamar o arquivo de conexao
            require_once "conexao.php";
          ?>

        <div class="section-title">
          <h2>Artigos</h2>
          <p>Veja alguns Artigos</p>
        </div>

        <div class="row justify-content-center">

          <?php
            try {
                // Crie uma consulta para recuperar os dados da tabela "cadastro_prof"
                $consulta = $conn->prepare("SELECT titulo_artig, sub_artig, arquivo_artig FROM artigos ORDER BY id_artig DESC LIMIT 3");
                $consulta->execute();

                while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-lg-3 col-md-6 d-flex align-items-stretch">';
                    echo '<div class="member">';
                    echo '<div class="artig-img">';
                    echo '<img src="area_adm/artigos/' . $row["arquivo_artig"] . '" class="img-fluid" alt="Imagem do Artigo" height="300" width="300"> ';
                    echo '</div>';
                    echo '<div class="member-info">';
                    echo '<h4>' . $row["titulo_artig"] . '</h4>';
                    echo '<span>' . $row["sub_artig"] . '</span>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } catch (PDOException $erro) {
                echo $erro->getMessage();
            }
          ?>

        </div>

      </div>
    </section><!-- End Artigos Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              
              <div class="row">
                <div class="align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-bookmark-heart"></i>
                    <span>Entender</span>
                    <p>.  Aqui no Ensino Ilimitado, nós desenvolvemos um <strong>modelo de aula que te permite acelerar ainda mais o processo de entendimento, </strong>que são as <strong>aulas interativas.</strong></p>
                  </div>
                </div>

                <div class="align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-bookmark-check"></i>
                    <span>Aprender</span>
                    <p>.  O segundo fundamento é <strong>aprender </strong>e se dá durante o seu estudo individual, quando você está fazendo exercícios sobre o que você entendeu durante a interação com a teoria.

                      Se você apenas assiste aulas e não faz exercícios, as conexões entre os neurônios não se formam e aqueles neurônios são usados para outros conhecimentos que você adquire ao longo do dia com mais envolvimento.</p>
                      
                      <p>Por isso, aqui no Ensino Ilimitado nós temos um lema: <strong>aula dada, aula estudada no dia!</strong></p>
                  </div>
                </div>

                <div class="align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-bookmark-star"></i>
                    <span>Fixar</span>
                    <p>.  O terceiro fundamento do método, é <strong>fixar para não esquecer. </strong>E para que você consiga fixar, combater as curvas de esquecimento e lembrar do conteúdo lá no dia da prova.</p>
                  </div>
                </div>

              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <?php
            try {
                // Crie uma consulta para recuperar os dados da tabela "cadastro_prof"
                $consulta = $conn->prepare("SELECT u.nome, u.escola, u.foto, u.categoria_id, u.biografia, m.categoria 
                                            as materias 
                                            FROM usuario u 
                                            LEFT JOIN categoria m 
                                            ON u.categoria_id = m.id_categoria 
                                            WHERE tipo_usuario = 'professor'
                                            AND u.biografia IS NOT NULL AND u.biografia <> ''
                                            ORDER BY id DESC LIMIT 5");
                $consulta->execute();

                while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="swiper-slide">';
                    echo '<div class="testimonial-item">';
                    echo '<img src="' . $row["foto"] . '" class="testimonial-img" alt="">';
                    echo '<h3>' . $row["nome"] . '</h3>';
                    echo '<h4>' . $row["escola"] . ' -/- ' . $row["materias"] . '</h4>';
                    echo '<p>';
                    echo '<i class="bx bxs-quote-alt-left quote-icon-left"></i>';
                    echo '' . $row["biografia"] . '';
                    echo '<i class="bx bxs-quote-alt-right quote-icon-right"></i>';
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } catch (PDOException $erro) {
                echo $erro->getMessage();
            }
            ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Professores</h2>
          <p>Veja alguns Professores</p>
        </div>

        <div class="row">

          <?php
            try {
                // Crie uma consulta para recuperar os dados da tabela "cadastro_prof"
                $consulta = $conn->prepare("SELECT u.nome, u.escola, u.foto, u.categoria_id, m.categoria 
                                            as materias 
                                            FROM usuario u 
                                            LEFT JOIN categoria m 
                                            ON u.categoria_id = m.id_categoria 
                                            WHERE tipo_usuario = 'professor' 
                                            ORDER BY id DESC LIMIT 4");
                $consulta->execute();

                while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-lg-3 col-md-6 d-flex align-items-stretch">';
                    echo '<div class="member" data-aos="fade-up" data-aos-delay="100">';
                    echo '<div class="member-img">';
                    echo '<img src="' . $row["foto"] . '" class="img-fluid" alt="Imagem do professor" height="210" width="210">';
                    echo '<div class="social">';
                    echo '<a href=""><i class="bi bi-twitter"></i></a>';
                    echo '<a href=""><i class="bi bi-facebook"></i></a>';
                    echo '<a href=""><i class="bi bi-instagram"></i></a>';
                    echo '<a href=""><i class="bi bi-linkedin"></i></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="member-info">';
                    echo '<h4>' . $row["nome"] . '</h4>';
                    echo '<span>' . $row["escola"] . ' -/- ' . $row["materias"] . '</span>';

                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } catch (PDOException $erro) {
                echo $erro->getMessage();
            }
            ?>

        </div>

      </div>
    </section><!-- End prof Section -->

    <!-- ======= Contact Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="container d-flex align-items-center justify-content-lg-between">
          <div class="col-lg-3 col-md-6">
            <div>
              <h3>Ei<span>.</span></h3>
              <p>
                <strong>Telefone:</strong> +55 (19) 99168-2217<br>
                <strong>Email:</strong> estudolimitado@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Informativos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="sobre.php">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="materias.php">Matérias</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="termos.html">Termos de Serviço</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="politica.html">Política de Privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Denuncias & Erros</h4>
            <p>Informe algum bug ou mal funcionamento do site, denuncias anônimas sobre algum professor, aluno, etc..</p>
            <form action="" method="post">
              <textarea
                id="mensagem"
                name="mensagem"
                rows="2"
                cols="33" required>
              </textarea>
              <input type="submit" value="Enviar">
            </form>

          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ei</span></strong>. Todos os Direitos Reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Desenvolvido por <a href="https://bootstrapmade.com/">Jean & Yasmin</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/login_perfil.js"></script>

</body>

</html>