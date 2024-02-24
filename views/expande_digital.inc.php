<?php
include_once 'email_digital.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo RUTA_IMG; ?>favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://www.google.com/recaptcha/api.js?render=6LcfoosiAAAAAL_4FygpjFJQHVtGGjDxm3vUWom4"></script>
  <link rel="stylesheet" href="<?php echo SERVER; ?>digital.css">
  <title>Expande Digital</title>
</head>

<body>
  <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fw-semibold">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#who-am-i">QUIENES SOMOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACTO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div data-bs-spy="scroll" data-bs-target="#navbar" tabindex="0">
    <section id="home">
      <div id="main-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active slide-1">
            <img src="<?php echo RUTA_IMG; ?>slide_digital_1.png" class="d-block w-100" alt="...">
            <div class="blue-style left carousel-caption d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="fw-bold display-4">ESTRATEGIA</h1>
                    <h2 class="display-1">Digital</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slide-2">
            <img src="<?php echo RUTA_IMG; ?>slide_digital_2.png" class="d-block w-100" alt="...">
            <div class="slide-title carousel-caption d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="fw-bold display-4">MARKETING DIGITAL</h1>
                    <h2 class="fw-bold">Expande tu negocio</h2>
                    <h4>Somos Expande Digital, especialistas en
                      desarrollo y crecimiento de negocios
                      digitales</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slide-3">
            <img src="<?php echo RUTA_IMG; ?>slide_digital_3.png" class="d-block w-100" alt="...">
            <div class="blue-style right carousel-caption d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="fw-bold display-4">CREATIVIDAD</h1>
                    <h2 class="display-1">Diseño</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <div>
      <section id="who-am-i">
        <div class="container">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-5">
              <h1 class="display-4 mb-5 text-dark fw-bold ">¿Quienes Somos?</h1>
              <p class="fw-semibold fs-4">
                Somos Expande Digital, especialistas en desarrollo y crecimiento de negocios digitales y ayudamos a
                profesionales independientes, emprendedores y empresarios a que puedan desarrollar un marketing que
                brinde resultados.
              </p>
            </div>
            <div class="col-md-7">
              <img src="<?php echo RUTA_IMG; ?>who_we_are.png" class="img-fluid" alt="who we are">
            </div>
          </div>
        </div>
      </section>
      <section id="services">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <h1 class="display-4 fw-bold">NUESTROS <br> SERVICIOS</h1>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 p-5 text-center">
              <img src="<?php echo RUTA_IMG; ?>service_1.png" class="img-fluid" alt="services">
              <h1 class="mt-3 fw-bold">Redes <br> sociales</h1>
            </div>
            <div class="col-md-4 p-5 text-center">
              <img src="<?php echo RUTA_IMG; ?>service_2.png" class="img-fluid" alt="services">
              <h1 class="mt-3 fw-bold">Marketing <br> 360°</h1>
            </div>
            <div class="col-md-4 p-5 text-center">
              <img src="<?php echo RUTA_IMG; ?>service_3.png" class="img-fluid" alt="services">
              <h1 class="mt-3 fw-bold">Desarrollo <br> de páginas web</h1>
            </div>
          </div>
        </div>
      </section>
      <section>
        video
      </section>
      <section id="summary">
        <div class="container">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-5">
              <p class="text-light fw-semibold fs-4">
                Desarrollamos planes para empresas que han invertido en publicidad digital, se han
                esforzado para obtener visibilidad y confianza de su público, han trabajado con agencias de publicidad y
                no tuvieron los resultados que buscaban.
                A través de nuestro plan de marketing 360°, aportamos
                estrategias y tácticas de enfoque que otorgarán alcance, credibilidad y sobre todo, resultados basados en
                los objetivos empresariales.
              </p>
            </div>
            <div class="col-md-5">
              <img src="<?php echo RUTA_IMG; ?>summary.png" class="img-fluid" alt="summary">
            </div>
          </div>
        </div>
      </section>
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="display-4 mb-5 text-dark fw-bold ">CONTACTO</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <img src="<?php echo RUTA_IMG; ?>contact.png" class="img-fluid" alt="summary">
            </div>
            <div class="col-md-8">
              <form action="<?php echo EXPANDE_DIGITAL . '#contact'; ?>" id="contact-form" method="post">
                <div class="row boxes">
                  <div class="col">
                    <div class="mb-3">
                      <label for="name" class="form-label fw-semibold">Nombre</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label fw-semibold">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="last_name" class="form-label fw-semibold">Apellido</label>
                      <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Apellido" required>
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label fw-semibold">Numero</label>
                      <input type="number" name="phone" class="form-control" id="phone" placeholder="Numero" required>
                    </div>
                  </div>
                </div>
                <div class="row my-5 radios">
                  <h3>Selecciona una servicio</h3>
                  <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="services" id="social_media" value="Redes Sociales">
                      <label class="form-check-label" for="social_media">
                        Redes Sociales
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="services" id="marketing" value="Marketing 360">
                      <label class="form-check-label" for="marketing">
                        Marketing 360
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="services" id="web_development" value="Desarrollo de paginas web">
                      <label class="form-check-label" for="web_development">
                        Desarrollo de paginas web
                      </label>
                    </div>
                  </div>
                </div>
                <div class="mb-3 boxes">
                  <label for="message" class="form-label fw-semibold">Mensaje</label>
                  <textarea class="form-control" name="message" id="message" rows="3" placeholder="Mensaje" required></textarea>
                </div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                <button type="submit" name="send_email" class="btn btn-primary">Enviar mensaje</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="">
      <div class="container text-light">
        <div class="row">
          <div class="col-lg-6">
            <img src="<?php echo RUTA_IMG; ?>logo-footer.png" class="img-fluid" alt="logo footer">
          </div>
          <div class="col-lg-6">
            <div class="pt-4 row justify-content-end">
              <div class="col-md-7">
                <p>
                  <i class="bi bi-geo-alt"></i> Av. heroínas #814 y C. 16 de Julio <br> Cochabamba - Bolivia
                </p>
                <p>
                  <a class="text-light" href="https://wa.link/0zwj23"><i class="bi bi-phone"></i> (+591) 77777777</a>
                </p>
                <p>
                  <a class="text-light" href="mailto:info@expandetrading.com"><i class="bi bi-envelope"></i>
                    info@expandetrading.com</a>
                </p>
              </div>
              <div class="col-md-5">
                <img src="<?php echo RUTA_IMG; ?>footer.jpg" class="sole" alt="footer">
                <div class="social-media text-center p-3">
                  <a href="https://www.facebook.com/" target="_blank" class="text-light"><i class="bi bi-facebook fs-1 mx-2"></i></a>
                  <a href="https://www.instagram.com/" target="_blank" class="text-light"><i class="bi bi-instagram fs-1 mx-2"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center my-3">
            Copyright ©<?php echo date("Y"); ?> <a class="text-light" href="https://expandetrading.com/" target="_blank">Expande</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="<?php echo SERVER; ?>script_digital.js"></script>
</body>

</html>