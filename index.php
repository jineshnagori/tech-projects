<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tech Projects</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
</head>

<body id="style-scroll">

  <!-- Pre-loader -->
  <div class="preloader">
    <div class="counter">0</div>
  </div>

  <!-- Navigation -->
  <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand logo-image" href="index.html"><code>Tech Projects</code> </a>

      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#android">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hire">Hire A Developer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home" class="intro-section">
    <div class="container">
      <div class="row align-items-center text-white">
        <!-- START THE CONTENT FOR THE INTRO  -->
        <div class="col-md-6 intros text-start" data-aos="fade-right" data-aos-duration="8000">
          <h1 class="display-2">
            <span class="display-2--intro">Welcome to Tech Projects</span>
            <span class="display-2--description lh-base">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eaque aliquam soluta non harum
              debitis officia et ratione doloribus sed!
            </span>
          </h1>
          <button onclick="location.href='https://appopener.com/yt/hcth1que5'"
            class="rounded-pill btn-rounded">Subscribe
            <span><i class="fa fa-arrow-right"></i></span>
          </button>
        </div>
        <!-- START THE CONTENT FOR THE VIDEO -->
        <div class="col-md-6 intros text-end" data-aos="fade-left" data-aos-duration="8000">
          <img src="assets/images/hero.svg" alt="video illutration" class="img-fluid">
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>

  <!-- Services -->
  <section id="service" class="service">
    <div class="container">
      <div class="row text-center">
        <h2 class="fw-bold mb-3">Services</h2>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <!-- START THE service CONTENT  -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6" data-aos="flip-up" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#android">
              <p>Android Projects</p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6" data-aos="flip-down" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#web">
              <p>Web Projects</p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6" data-aos="flip-up" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#python">
              <p>Python Projects</p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6" data-aos="flip-down" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#udemy">
              <p>Udemy Free courses</p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6" data-aos="flip-up" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#contact">
              <p>Hire A Developer</p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6" data-aos="flip-down" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#contact">
              <p>Sell Your Project Here</p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6" data-aos="flip-up" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#contact">
              <p>Become Reseller</p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6" data-aos="flip-down" data-aos-duration="8000">
          <div class="service-box shadow-sm">
            <a href="#contact">
              <p>Online 1 to 1 Coaching</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Android Projects -->
  <section id="android" class="project">
    <div class="container">
      <div class="row text-center">
        <h2 class="fw-bold mb-3 mt-4">Android Projects</h2>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php
            include 'config.php';
            $sql = "SELECT * FROM app";
            $result = mysqli_query($con, $sql);
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-sm-6 col-lg-4 mb-4" data-aos="zoom-in-right" data-aos-duration="8000">
          <div class="projects">
            <a href="#appModal" data-toggle="modal"><img src="assets/images/upload/android/<?php echo $row['images']; ?>" alt="Image placeholder"
                class="img-fluid"></a>
            <div class="projects-text">
              <h3 class="text-center"><a href="#appModal" data-toggle="modal"><?php echo $row['pname']; ?></a></h3>
            </div>
          </div>
        </div>
        <?php
            $i++;
          }
        ?>
      </div>
    </div>
  </section>

  <div class="modal" id="appModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php
      include 'config.php';
      $sql = "SELECT * FROM app";
      $result = mysqli_query($con, $sql);
      $i = 1;
      while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="pt-4">
            <img src="assets/images/upload/android/<?php echo $row['images']; ?>" class="img-fluid p-2">
        </div>
        <div class="modal-body">
          <div>
            <h3 class="fw-bold"><?php echo $row['pname']; ?></h3>
            <p class="text-muted"><?php echo $row['pdesc']; ?></p>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <a href="#" class="btn btn-primary text-white">Buy Now</a>
        </div>
      </div>
    </div>
    <?php
        $i++;
      }
    ?>
  </div>

  <!-- Web Projects -->
  <section id="web" class="project">
    <div class="container">
      <div class="row text-center">
        <h2 class="fw-bold mb-3 mt-4">Web Projects</h2>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php
            include 'config.php';
            $sql = "SELECT * FROM web";
            $result = mysqli_query($con, $sql);
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-sm-6 col-lg-4 mb-4" data-aos="zoom-in-right" data-aos-duration="8000">
          <div class="projects">
            <a href="#appModal" data-toggle="modal"><img src="assets/images/upload/web/<?php echo $row['images']; ?>" alt="Image placeholder"
                class="img-fluid"></a>
            <div class="projects-text">
              <h3 class="text-center"><a href="#appModal" data-toggle="modal"><?php echo $row['pname']; ?></a></h3>
            </div>
          </div>
        </div>
        <?php
            $i++;
          }
        ?>
      </div>
    </div>
  </section>

  <div class="modal" id="appModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php
      include 'config.php';
      $sql = "SELECT * FROM web";
      $result = mysqli_query($con, $sql);
      $i = 1;
      while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="pt-4">
            <img src="assets/images/upload/web/<?php echo $row['images']; ?>" class="img-fluid p-2">
        </div>
        <div class="modal-body">
          <div>
            <h3 class="fw-bold"><?php echo $row['pname']; ?></h3>
            <p class="text-muted"><?php echo $row['pdesc']; ?></p>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <a href="#" class="btn btn-primary text-white">Buy Now</a>
        </div>
      </div>
    </div>
    <?php
        $i++;
      }
    ?>
  </div>

  <!-- Python Projects -->
  <section id="python" class="project">
    <div class="container">
      <div class="row text-center">
        <h2 class="fw-bold mb-3 mt-4">Python Projects</h2>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php
            include 'config.php';
            $sql = "SELECT * FROM python";
            $result = mysqli_query($con, $sql);
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-sm-6 col-lg-4 mb-4" data-aos="zoom-in-right" data-aos-duration="8000">
          <div class="projects">
            <a href="#appModal" data-toggle="modal"><img src="assets/images/upload/python/<?php echo $row['images']; ?>" alt="Image placeholder"
                class="img-fluid"></a>
            <div class="projects-text">
              <h3 class="text-center"><a href="#appModal" data-toggle="modal"><?php echo $row['pname']; ?></a></h3>
            </div>
          </div>
        </div>
        <?php
            $i++;
          }
        ?>
      </div>
    </div>
  </section>

  <div class="modal" id="appModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php
      include 'config.php';
      $sql = "SELECT * FROM python";
      $result = mysqli_query($con, $sql);
      $i = 1;
      while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="pt-4">
            <img src="assets/images/upload/python/<?php echo $row['images']; ?>" class="img-fluid p-2">
        </div>
        <div class="modal-body">
          <div>
            <h3 class="fw-bold"><?php echo $row['pname']; ?></h3>
            <p class="text-muted"><?php echo $row['pdesc']; ?></p>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <a href="#" class="btn btn-primary text-white">Buy Now</a>
        </div>
      </div>
    </div>
    <?php
        $i++;
      }
    ?>
  </div>

  <!-- Hire -->
  <section id="hire" class="get-started pt-2">
    <div class="container">
      <div class="row text-center">
        <h2 class="fw-bold mb-3">Hire</h2>
        <div class="heading-line"></div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 text-center">
          <div class="col-sm-4 col-lg-4 w-100 text-center mb-2" data-aos="fade-up" data-aos-duration="8000">
            <img class="dev" src="assets/images/dev/1.png" class="img-fluid">
          </div>
          <div class="col-sm-8 col-lg-8 w-100 mb-4" data-aos="fade-down" data-aos-duration="8000">
            <h3>Brijesh Kumar</h3>
            <h6>Android Developer</h6>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, voluptatem iusto enim incidunt sequi earum esse similique quis dolores illum aspernatur magnam nesciunt impedit et soluta quo eius culpa dicta quia! Praesentium tempora ipsam, eum temporibus in officiis nobis quae rem cum itaque libero soluta eligendi possimus asperiores pariatur quisquam.</p>
            <a id="button" href="" class="btn-primary p-2 text-white">HIRE ME</a>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="col-sm-4 col-lg-4 w-100 text-center mb-2" data-aos="fade-up" data-aos-duration="8000">
            <img class="dev" src="assets/images/dev/1.png" class="img-fluid">
          </div>
          <div class="col-sm-8 w-100 col-lg-8 mb-4" data-aos="fade-down" data-aos-duration="8000">
            <h3>Brijesh Kumar</h3>
            <h6>Android Developer</h6>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, voluptatem iusto enim incidunt sequi earum esse similique quis dolores illum aspernatur magnam nesciunt impedit et soluta quo eius culpa dicta quia! Praesentium tempora ipsam, eum temporibus in officiis nobis quae rem cum itaque libero soluta eligendi possimus asperiores pariatur quisquam.</p>
            <a id="button" href="" class="btn-primary p-2 text-white">HIRE ME</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="get-started pt-2">
    <div class="container">
      <div class="row text-center">
        <h2 class="fw-bold mb-3">Join</h2>
        <div class="heading-line"></div>
      </div>

      <!-- START THE CTA CONTENT  -->
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-md-12 bg-white p-3">
          <div class="form w-100 pb-2">
            <form method="POST" action="contact.php" class="row">
              <div class="col-lg-6 col-md-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="fname" type="text" placeholder="First Name" id="inputFirstName"
                  class="form-control form-control-lg">
              </div>
              <div class="col-lg-6 col-md-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="lname" type="text" placeholder="Last Name" id="inputLastName"
                  class="form-control form-control-lg">
              </div>
              <div class="col-lg-6 col-md-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="email" type="text" placeholder="Enter Yout Email" id="inputEmail"
                  class="form-control form-control-lg">
              </div>
              <div class="col-lg-6 col-md-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input list="joinus" placeholder="Join" name="joinus" class="form-control form-control-lg">
                <datalist id="joinus">
                  <option value="Sell Your Project Here">Sell Your Project Here</option>
                  <option value="Become Reseller">Become Reseller</option>
                  <option value="Online 1 to 1 Coaching">Online 1 to 1 Coaching</option>
                </datalist>
                </input>
              </div>
              <div class="col-lg-12 col-md-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <textarea name="message" placeholder="Message" id="message" rows="8"
                  class="form-control form-control-lg"></textarea>
              </div>
              <div class="col-lg-12 col-md-12 mb-3 d-grid text-center">
                <button type="submit" id="button" class="rounded-pill pt-3 pb-3">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center">Tech Projects</h1>
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a href="#">Home</a>
              </li>
              <li class="nav-item">
                <a href="#service">Services</a>
              </li>
              <li class="nav-item">
                <a href="#android">Projects</a>
              </li>
            </ul>

            <ul class="social-icons nav justify-content-center">
              <li class="nav-item">
                <a aria-current="page" href="mailto:"><i class="fa fa-envelope"></i></a>
              </li>
              <li class="nav-item">
                <a href="https://www.instagram.com/tech__projects"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="nav-item">
                <a href="https://appopener.com/yt/hcth1que5"><i class="fa fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="footer__copyright">
              <p class="text-center">Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> Tech Projects. All rights reserved
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
    autoplay: 1000,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
</script>
<script>
  function counter() {
    var count = setInterval(function () {
      var c = parseInt($('.counter').text());
      $('.counter').text((++c).toString());
      if (c == 100) {
        clearInterval(count);
        $('.counter').addClass('hide');
        $('.preloader').addClass('active');
      }
    })
  }
  counter();
</script>
<script src="assets/js/main.js"></script>

</html>