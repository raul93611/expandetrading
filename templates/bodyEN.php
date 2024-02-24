<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#quienes-somos">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#quieres-desarrollarte">Want to know more?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nuestros-servicios">Our Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#clientes">Our Clients</a>
        </li>
        <form id="language" action="" method="post">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $lang == 'EN' ? 'English' : 'Spanish'; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" data-lang="ES" href="#">Spanish</a></li>
              <li><a class="dropdown-item" data-lang="EN" href="#">English</a></li>
            </ul>
          </li>
          <input type="hidden" name="lang" value="">
        </form>
      </ul>
      <form class="d-flex">
        <a class="btn-regular btn btn-danger" href="#contacto"><i class="fa-solid fa-file-signature"></i> Ask a Quote</a>
      </form>
    </div>
  </div>
</nav>
<div class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="display-1 fw-bold">EXPANDE</h1>
        <h1 class="display-2 fw-bold">International Trading Company</h1>
        <h1>General Trading Services Including Import, Export, and Triangle Trading.</h1>
        <a class="btn-regular btn btn-danger" href="#contacto"><i class="fa-solid fa-file-signature"></i> Contact Us</a>
      </div>
    </div>
  </div>
</div>
<section class="section my-5 d-flex align-items-center" id="quienes-somos">
  <div class="container bg-white">
    <div class="row">
      <div class="border rounded col-md-6">
        <div class="p-5">
          <h1 class="fw-bold title text-center">ABOUT US</h1>
          <blockquote class="blockquote">
            <p>
              We are a representative company for manufacturers and buyers in Latin America, our purpose is to provide market opportunities for the import and/or export of products through our business contacts settled in our global network.
            </p>
            <p>
              With a team of trading and logistic experts, we are able to provide exceptional customer service and accommodate the various needs of our clients.
            </p>
            <a href="#contacto" class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i> Contact Us</a>
          </blockquote>
        </div>
      </div>
      <div class="border rounded col-md-6 hands">
      </div>
    </div>
  </div>
</section>
<section class="section my-5 d-flex align-items-center" id="quieres-desarrollarte">
  <div class="container ">
    <div class="row">
      <div class="bg-white border rounded p-5 col-md-6 position-relative">
        <h2 class="title fw-bold">EXPORT TRADING DEVELOPMENT</h2>
        <blockquote class="blockquote">
          <p>
            We empower you as an exporter.
          </p>
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal1" class="m-4 position-absolute bottom-0 end-0 btn btn-outline-info"><i class="fa-solid fa-eye"></i> Read more</button>
        </blockquote>
      </div>
      <div class="bg-white border rounded p-5 col-md-6 position-relative">
        <h2 class="title fw-bold">SUPPLIERS TRADING DEVELOPMENT</h2>
        <blockquote class="blockquote">
          <p>
            We improve your suppliers alternatives.
          </p>
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal2" class="m-4 position-absolute bottom-0 end-0 btn btn-outline-info"><i class="fa-solid fa-eye"></i> Read more</button>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="section my-5" id="nuestros-servicios">
  <div class="container">
    <div class="row">
      <div class="my-5 col-md-12">
        <h1 class="fw-bold title text-center">OUR SERVICES</h1>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <blockquote class="blockquote text-center">
          <p>
            We create value designing a specific work structure for each client, thus ensure desired goals and objectives achievement
            We work with certified products and services to meet our customers’ requirements
            Through our services, we save travel costs to meet clients and suppliers, we simplify the international business operation.
          </p>
        </blockquote>
      </div>
    </div>
    <div class="my-5 row">
      <div class="col-md-4">
        <h1 class="display-1 text-black-50">01.</h1>
        <h2 class="title fw-bold">Integrity</h2>
        <blockquote class="blockquote">
          <p>
            Maximum clarity, transparency throughout the process.
          </p>
        </blockquote>
      </div>
      <div class="col-md-4">
        <h1 class="display-1 text-black-50">02.</h1>
        <h2 class="title fw-bold">Networking</h2>
        <blockquote class="blockquote">
          <p>
            We have commercial contacts in Asia, the United States and Latin America.
          </p>
        </blockquote>
      </div>
      <div class="col-md-4">
        <h1 class="display-1 text-black-50">03.</h1>
        <h2 class="title fw-bold">Support and Training</h2>
        <blockquote class="blockquote">
          <p>
            We guide in everything necessary to consolidate the international operation, our greatest interest is to seek success for our represented.
          </p>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="section my-5 d-flex align-items-center " id="clientes">
  <div class="container justify-content-center">
    <div class="row">
      <div class="col-md-6">

      </div>
      <div class="border rounded col-md-6 bg-white">
        <div class="p-5">
          <h1 class="fw-bold title text-center">OUR CLIENTS</h1>
          <blockquote class="blockquote text-center">
            <p>
              Manufacturers, distributors who wish to improve their operations at an international level, diversify their market of suppliers and customers.
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section my-5" id="contacto">
  <div class="container">
    <h1 class="fw-bold title text-center">CONTACT</h1>
    <form id="contactForm" action="<?php echo SERVER; ?>" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="company" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="company" name="company" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" required>
      </div>
      <div class="mb-3">
        <label for="how-get" class="form-label">How do you get to us?</label>
        <input type="text" class="form-control" id="how-get" name="how-get" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
      </div>
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
      <button type="submit" class="btn btn-primary" name="send_email">Send</button>
    </form>
  </div>
</section>
<footer class="py-5 bg-light text-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        Logo
      </div>
      <div class="col-md-3">
        <p>
          Calle Parroquia 201, interno 1004 <br>
          Actipan <br>
          03230 Benito Juárez, CDMX <br>
          Mexico
        </p>
      </div>
      <div class="col-md-3">
        <a href="mailto:info@expandetrading.com">info@expandetrading.com</a>
      </div>
      <div class="col-md-3">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#quienes-somos">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#quieres-desarrollarte">Want to know more?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nuestros-servicios">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#clientes">Our Clients</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        Copyright ©2022 Expande.
      </div>
    </div>
  </div>
</footer>
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title title fw-bold" id="exampleModalLabel">EXPORT TRADING DEVELOPMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <blockquote class="blockquote p-3">
          <ul>
            <li>
              We develop market opportunities and international contacts for your products.
            </li>
            <li>
              We diversify the portfolio of your clients and establish business relationships with reliable international buyers.
            </li>
            <li>
              We seek to minimize the costs and risks of international operations.
            </li>
            <li>
              We provide logistical support in your international operation.
            </li>
          </ul>
        </blockquote>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title title fw-bold" id="exampleModalLabel">SUPPLIERS TRADING DEVELOPMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <blockquote class="blockquote p-3">
          <ul>
            <li>
              We develop reliable supplier alternatives with experience in international trade for your business.
            </li>
            <li>
              We strive to provide you with speed, clarity and transparency in supplier offers and alternatives.
            </li>
            <li>
              Our goal is to help you develop long-term business contacts with trusted international vendors.
            </li>
            <li>
              We collaborate in minimizing the risks in your international trade operations.
            </li>
            <li>
              We provide logistical support in the international operation to improve its performance.
            </li>
          </ul>
        </blockquote>
      </div>
    </div>
  </div>
</div>
