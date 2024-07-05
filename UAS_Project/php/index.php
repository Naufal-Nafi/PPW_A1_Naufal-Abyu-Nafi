<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="1024, initial-scale=1.0">
  <title>MyDemy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    <?php
    include "css/style.css";
    ?>
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
    <div class="container-fluid">
      <img src="images/logo.png" class="img-fluid mx-3" alt="" style="width: 2rem; height : 2rem;">
      <a class="navbar-brand me-auto" href="#">MyDemy</a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <img src="images/logo.png" class="img-fluid mx-3" alt="" style="width: 2rem; height : 2rem;">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MyDemy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body align-items-center" style="align-items: center;">
          <ul class="navbar-nav justify-content-end text-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 " aria-current="page" href="#hero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 " href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 " href="#courses">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 " href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 " href="#contact">Contact</a>
            </li>
          </ul>
          <label class="switch">
            <input type="checkbox" id="dark-btn">
            <span class="slider"></span>
          </label>
          <button class="button mx-3" id="login-btn" onclick="location.href='auth.php'">Login / Sign Up</button>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!-- Navbar ends -->





  <!-- Hero -->
  <section id="hero" class="min-vh-100 d-flex align-items-center text-left">
    <div class="container d-flex justify-content-around">
      <div class="row">
        <div class="col-12">
          <h1 data-aos="fade-left" class="text-white fw-semibold display-1">WELCOME TO <br>
            <span class="span-brand">MyDemy</span>
          </h1>
          <h5 class="text-white mt-3 mb-4" data-aos="fade-right">Belajar Melalui Web Secara Gratis</h5>
          <div data-aos="fade-up" data-aos-delay="50">
            <button onclick="location.href='#quotes'" class="button me-2 p-3">Mulai
              <i class="bi bi-arrow-down-circle ms-2"></i>
            </button>
          </div>
        </div>
      </div>
      <img src="images/hero_img.png" alt="">
    </div>
  </section>
  <!-- Hero ends -->





  <!-- quotes -->
  <div id="quotes" class="quotes section ">
    <div class="container text-center py-4" data-aos="fade-up">
      <h5><i class="bi bi-quote me-4"></i>Once a new <span>technology</span> rolls over you,
        if you're not part of the <span>steamroller</span>, you're part of the <span>road</span>.</h5>
      <div class="name text-end mt-5 me-5">
        <h5>Stewart Brand – Penulis</h5>
      </div>
    </div>

  </div>
  <!-- quotes ends  -->






  <!-- About Section -->
  <section id="about" class="about section py-5">
    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
      <h2>About Us</h2>
      <div class="underline my-4"></div>
    </div>
    <!-- End Section Title -->

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <p>
          Selamat datang di MyDemy, destinasi utama Anda untuk belajar online. 
          Di MyDemy, kami percaya pada kekuatan transformasi pendidikan, 
          memberdayakan individu di seluruh dunia untuk meningkatkan pengetahuan dan keterampilan mereka.
          </p>
          <ul>
            <li>
              <i class="bi bi-check2-circle"></i>
              <span>Pendidikan Berkualitas</span>
            </li>
            <li>
              <i class="bi bi-check2-circle"></i>
              <span>Komitmen Terhadap Pengalaman Pengguna</span>
            </li>
            <li>
              <i class="bi bi-check2-circle"></i>
              <span>Dukungan Terhadap Pertumbuhan Individu</span>
            </li>
          </ul>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <p>
          Kami berkomitmen untuk menyediakan pengalaman belajar yang intuitif dan memuaskan, 
          memanfaatkan teknologi untuk menyampaikan konten pendidikan berkualitas tinggi. 
          Baik Anda ingin meningkatkan keahlian profesional, mengeksplorasi hobi baru, 
          atau mempersiapkan diri untuk tantangan akademis, MyDemy siap mendukung perjalanan Anda setiap langkahnya.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /About Section -->




  <!-- Courses Section -->
  <section id="courses" class="services section py-5">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Courses</h2>
      <div class="underline my-4"></div>
      <p>
        Temukan kursus pembelajaran yang anda inginkan
      </p>
    </div>
    <!-- End Section Title -->


    <div class="container">
      <div class="row gy-4">
        <div class="card col-xl-3 col-md-6 d-flex mx-3 py-4" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-activity icon"></i></div>
            <h4>
              <p>Python</p>
            </h4>
            <p>
              Kursus pemrograman Python dasar.
            </p>
            <button class="button" data-bs-toggle="modal" data-bs-target="#loginModal">Start</button>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="card col-xl-3 col-md-6 d-flex mx-3 p-4" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-activity icon"></i></div>
            <h4>
              <p>Python Data Structure</p>
            </h4>
            <p>
              Belajar struktur data dengan Python.
            </p>
            <button class="button" data-bs-toggle="modal" data-bs-target="#loginModal">Start</button>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="card col-xl-3 col-md-6 d-flex mx-3 p-4" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles icon"></i>
            </div>
            <h4>
              <p>Database</p>
            </h4>
            <p>
              Pengantar konsep database.
            </p>
            <button class="button" data-bs-toggle="modal" data-bs-target="#loginModal">Start</button>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="card col-xl-3 col-md-6 d-flex mx-3 p-4" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week icon"></i>
            </div>
            <h4>
              <p>Front-end</p>
            </h4>
            <p>
              Dasar-dasar pengembangan front-end.
            </p>
            <button class="button" data-bs-toggle="modal" data-bs-target="#loginModal">Start</button>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="card col-xl-3 col-md-6 d-flex mx-3 p-4" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4>
              <p>English 1</p>
            </h4>
            <p>
              Kursus bahasa Inggris dasar.
            </p>
            <button class="button" data-bs-toggle="modal" data-bs-target="#loginModal">Start</button>
          </div>
        </div>
        <!-- End Service Item -->
        <div class="card col-xl-3 col-md-6 d-flex mx-3 p-4" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles icon"></i>
            </div>
            <h4>
              <p>English 2</p>
            </h4>
            <p>
              Kursus bahasa Inggris lanjutan.
            </p>
            <button class="button" data-bs-toggle="modal" data-bs-target="#loginModal">Start</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login First</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Woohooo, Anda Belum Login!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="button px-4" onclick="location.href='auth.php'">Login</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal ends  -->
  </section>
  <!-- /Courses Section -->





  <!-- Team Section -->
  <section id="team" class="team section py-5">
    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
      <h2>Team</h2>
      <div class="underline my-4"></div>
      <p class="my-5">
        Bertemulah dengan orang-orang hebat dibalik website ini
      </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member d-flex align-items-start p-5">
            <div class="pic pic-1">
              <img src="images/team-1.jpg" class="img-fluid" alt="" />
            </div>
            <div class="member-info ms-4">
              <h4>Naufal Abyu Nafi</h4>
              <h6>Chief Executive Officer</h6>
              <p>
                A visionary leader with extensive experience in the edtech industry.
              </p>
              <div class="social">
                <a href="https://x.com/" target="_blank"><i class="bi bi-twitter-x"></i></>
                <a href="https://facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://linkedin.com/" target="_blank"> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Team Member -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member d-flex align-items-start p-5">
            <div class="pic">
              <img src="images/team-2.jpg" class="img-fluid" alt="" />
            </div>
            <div class="member-info ms-3">
              <h4>Reza Luthfi Akbar</h4>
              <h6>Chief Technology Officer</h6>
              <p>
                A tech-savvy executive pioneer of the development.
              </p>
              <div class="social">
                <a href="https://x.com/" target="_blank"><i class="bi bi-twitter-x"></i></a>
                <a href="https://facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://linkedin.com/" target="_blank"> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Team Member -->
      </div>
    </div>
  </section>
  <!-- /Team Section -->





  <!-- Contact Section -->
  <section id="contact" class="contact section py-5">
    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
      <h2>Contact</h2>
      <div class="underline my-4"></div>
      <p>
        Temukan sosial media kami
      </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="d-flex justify-content-around">
          <a class="social youtube d-flex flex-column align-items-center" href="https://youtube.com/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color:inherit;">
            <i class="bi bi-youtube"></i>
            <p>Youtube</p>
          </a>          
          <a class="social twitter d-flex flex-column align-items-center" href="https://x.com/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color:inherit;">
            <i class="bi bi-twitter-x"></i>
            <p>Twitter / X</p>
          </a>        
        </div>
        <div class="d-flex justify-content-around mt-5">
          <a class="social instagram d-flex flex-column align-items-center" href="https://instagram.com/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color:inherit;">
            <i class="bi bi-instagram"></i>
            <p>Instagram</p>
          </a>
          <a class="social facebook d-flex flex-column align-items-center" href="https://facebook.com/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color:inherit;">
            <i class="bi bi-facebook"></i>
            <p>Facebook</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- /Contact Section -->





  <!-- Footer -->
  <footer class="text-center text-white">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#hero" class="text-white">Home</a>
            </h6>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#about" class="text-white">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#courses" class="text-white">Courses</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#team" class="text-white">Team</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#contact" class="text-white">Contact</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              MyDemy adalah platform kursus online yang menyediakan berbagai kursus berkualitas 
              untuk mendukung pembelajaran dan pengembangan keterampilan Anda. Mari belajar dan tumbuh bersama kami.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="copyright text-center p-3">
      © 2024 Copyright:
      <p class="text-white" href="">MyDemy.com</p>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- footer ends  -->







  <script>

    let darkBtn = document.getElementById("dark-btn");
    darkBtn.onclick = function () {
      document.body.classList.toggle("dark-mode");
    };

    const navEl = document.querySelector('.navbar');
    window.addEventListener('scroll', function () {
      if (window.scrollY >= 100) {
        navEl.classList.add('navbar-scrolled');
      } else if (window.scrollY < 100) {
        navEl.classList.remove('navbar-scrolled');
      }
    });

  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>