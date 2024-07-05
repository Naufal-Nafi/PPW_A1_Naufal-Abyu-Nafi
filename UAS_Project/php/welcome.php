<?php
// welcome.php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: auth.php");
  exit();
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    <?php
    include "./css/style.css";
    ?>
  </style>
  <style>
    body {
      background-color: #060420fb;
    }

    .section-title {
      color: #f4f4f4;
    }

    .copyright {
      background-color: #070707;
    }
    .user_name {
      color: #f4f4f4 ;
    }
    .btn_start {
      text-decoration: none;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
    <div class="container-fluid">
      <img src="images/logo.png" class="img-fluid mx-3" alt="" style="width: 2rem; height : 2rem;">
      <a class="navbar-brand me-auto" href="#">MyDemy</a>
    </div>
    <div class="user_name">
      <?php
      if (isset($_SESSION['username'])) {
        echo "<p> Hello, " . $_SESSION['username'] . "</p>";
      } else {
        echo "<a href='auth.php'>Login</a>";
      }
      ?>
    </div>
    <button class="button mx-3" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
  </nav>
  <!-- Navbar ends -->

  <!-- Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure want to logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="button px-4" onclick="location.href='index.php'">Logout</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal ends  -->




  <!-- Courses Section -->
  <section id="courses" class="services section py-5">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Available Courses</h2>
      <div class="underline my-4"></div>      
    </div>
    <!-- End Section Title -->

    <div class="container">
      <div class="row gy-4">
        <?php
        // Menghubungkan ke database
        $conn = new mysqli("localhost", "root", "", "online_course");

        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }

        // Mengambil daftar course dari database
        $sql = "SELECT course_id, title, description_text FROM courses";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            ?>
            <div class="card col-xl-3 col-md-6 d-flex mx-3 py-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-activity icon"></i></div>
                <h4>
                  <p><?php echo $row["title"]; ?></p>
                </h4>
                <p><?php echo $row["description_text"]; ?></p>
                <a href='lessons.php?course_id=<?php echo $row["course_id"]; ?>' class="button btn_start">Start</a>
              </div>
            </div>
            <!-- End Service Item -->
            <?php
          }
        } else {
          echo "0 results";
        }

        $conn->close();
        ?>
      </div>
    </div>
  </section>

  <!-- /Courses Section -->



  <!-- Footer -->
  <footer class="text-center text-white">
    <!-- Grid container -->
    <div class="container">


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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>