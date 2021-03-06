<?php 

  if($_GET['msgDesc']){
    $msg = $_GET['msgDesc'];
  }
  else{
    $msg = 'Write Your Message here...';
  }

?>


<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Aishwarya Beauty Salon" />
    <meta
      name="keywords"
      content="Aishwarya, Beauty, Salon, aurangabad, parlour, archana, mantri"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Aishwarya Beauty Salon</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/flaticon.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="canvas-close">
        <i class="fa fa-close"></i>
      </div>
      <div class="canvas-search">
        <a href="tel:9766528261" class="text-light">
          <!-- <i class="fa fa-search"></i> -->
          +91 9766528261
        </a>
      </div>
      <nav class="canvas-menu mobile-menu">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./transformation.php">Transformation</a></li>
          <li><a href="./bridal.php">Bridal Makeup</a></li>
          <li><a href="./sider.php">Sider Makeup</a></li>
          <li><a href="./occasional.php">Occasional Makeup</a></li>
          <li><a href="./services.html">Salon Services</a></li>
          <li><a href="./gallery.php">Gallery</a></li>
          <li><a href="./academy.html">Academy</a></li>
          <li><a href="./blog.php">Blog</a></li>
          <li><a href="./about-us.html">About</a></li>
          <li><a href="./contact.html">Contact</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="canvas-social">
        <a href="https://www.instagram.com/archanamantri1234/"
          ><i class="fa fa-instagram"></i
        ></a>
        <a href="https://www.facebook.com/MuaArchana/"
          ><i class="fa fa-facebook"></i
        ></a>
        <a href="https://m.youtube.com/channel/UCPRjcWmc0FBWXDm6on1zVbw"
          ><i class="fa fa-youtube-play"></i
        ></a>
        <a href="https://api.whatsapp.com/send?phone=+919766528261"
          ><i class="fa fa-whatsapp"></i
        ></a>
      </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <div class="logo">
              <a href="./index.html">
                <img src="img/logo.png" alt="" />
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="nav-menu">
              <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./transformation.php">Transformation</a></li>
                <li><a href="./bridal.php">Bridal Makeup</a></li>
                <li><a href="./sider.php">Sider Makeup</a></li>
                <li><a href="./occasional.php">Occasional Makeup</a></li>
                <li><a href="./services.html">Salon Services</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li><a href="./academy.html">Academy</a></li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./about-us.html">About</a></li>
                <li><a href="./contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="top-option">
              <div class="to-search">
                <a href="tel:9766528261" class="text-light">
                  <!-- <i class="fa fa-search"></i> -->
                  +91 9766528261
                </a>
              </div>
              <div class="to-social">
                <a href="https://www.instagram.com/archanamantri1234/"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a href="https://www.facebook.com/MuaArchana/"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="https://m.youtube.com/channel/UCPRjcWmc0FBWXDm6on1zVbw"
                  ><i class="fa fa-youtube-play"></i
                ></a>
                <a href="https://api.whatsapp.com/send?phone=+919766528261"
                  ><i class="fa fa-whatsapp"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="canvas-open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/hero/bg2.png">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb-text">
              <h2>Submit Details</h2>
              <div class="bt-option">
                <a href="./index.html">Home</a>
                <span>Submit Details</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About US Section Begin -->
    <section class="aboutus-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 p-0 about-text">
            <section class="contact-section spad">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="section-title contact-title">
                      <span>Contact Us</span>
                      <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="contact-widget">
                      <div class="cw-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Aurangabad, Maharashtra. 431 001</p>
                      </div>
                      <div class="cw-text">
                        <i class="fa fa-instagram"></i>
                        <ul>
                          <li>
                            <a
                              href="https://www.instagram.com/archanamantri1234/"
                              class="text-light"
                            >
                              @archanamantri1234
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="cw-text email">
                        <i class="fa fa-facebook"></i>
                        <p>
                          <a
                            href="https://www.facebook.com/MuaArchana/"
                            class="text-light"
                            >MuaArchana</a
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="section-title contact-title">
                      <span>Fill the form and</span>
                      <h2>Submit The Details</h2>
                    </div>
                    <div class="leave-comment">
                      <form action="./admin/formSubmit.php" method="POST">
                        <input type="text" name="fname" placeholder="Name" />
                        <input type="email" name="email" placeholder="Email" />
                        <input
                          type="number"
                          name="mobile"
                          placeholder="mobile"
                        />
                        <textarea
                          name="msg"
                          placeholder="Message(Optional)"
                        >
                        <?php echo $msg; ?>
                        </textarea>
                        <button type="submit">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938.0130816078536!2d75.36037682920293!3d19.88001226034866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDUyJzQ4LjAiTiA3NcKwMjEnMzkuMyJF!5e0!3m2!1sen!2sin!4v1614856789535!5m2!1sen!2sin"
                    width="100%"
                    height="300"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    height="750"
                    style="border: 0"
                    allowfullscreen=""
                  ></iframe>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
    <!-- About US Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="gt-text">
              <i class="fa fa-map-marker"></i>
              <p>
                Chistia Chowk, Cidco Aurangabad<br />
                Pincode 431001
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gt-text">
              <i class="fa fa-mobile"></i>
              <ul>
                <li>+91 9766528261</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gt-text email">
              <i class="fa fa-envelope"></i>
              <p>aishwarya.parlour11@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Section Begin -->
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="fs-about">
              <h4 class="text-light">About</h4>

              <div class="fa-logo">
                <!-- <a href="#"><img src="img/logo.png" alt=""></a> -->
              </div>
              <p class="text-justify">
                Archana mantri makeup, Saree draping and Hair styling artist in
                aurangabad maharashtra. Best in bridal Makeup party, Occasion,
                Media, Traditional and Fashion makeup, HD and air brush. The
                services are available in our studio in aurangabad on side and
                the venue all over india and world. for more details contact us
                or visit our studio in aurangabad
              </p>
              <div class="fa-social">
                <a href="https://www.instagram.com/archanamantri1234/"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a href="https://www.facebook.com/MuaArchana/"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="https://m.youtube.com/channel/UCPRjcWmc0FBWXDm6on1zVbw"
                  ><i class="fa fa-youtube-play"></i
                ></a>
                <a href="https://api.whatsapp.com/send?phone=+919766528261"
                  ><i class="fa fa-whatsapp"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 offset-md-2 col-md-3 col-sm-6">
            <div class="fs-widget">
              <h4>Useful links</h4>
              <ul>
                <li><a href="about-us.html">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="fs-widget">
              <h4>Makeup</h4>
              <ul>
                <li><a href="bridal.php">Bridal</a></li>
                <li><a href="sider.php">Sider</a></li>
                <li><a href="occasional.php">Occasional</a></li>
                <li><a href="transformation.php">Transformation</a></li>
                <li><a href="academy.html">Academy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-10 offset-lg-1 fs-widget">
            <h4 class="text-center">
              Weekdays: 11AM to 7.30PM &nbsp; | &nbsp; Saturday : 10AM to 5PM
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="copyright-text">
              <p>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Handcrafted by Saurabh Dhakne
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
