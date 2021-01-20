<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/depan/images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/depan/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

  <!-- Header -->
 
    <!-- Header desktop -->
   

      <div class="wrap_header">
        <!-- Logo -->
        <a href="index.html" class="logo">
          <img src="<?php echo base_url() ?>assets/depan/images/icons/ananda1.png"  width="150px" height="200px" alt="IMG-LOGO">
        </a>

        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu">
            <ul class="main_menu">
              <li>
                <a href="home">Home</a>  
              </li>
              <li>
                <a href="gallery">Gallery</a>
              </li>

              <li>
                <a href="ketentuan">Tentang Kami</a>
              </li>
              <li>
                <a href="contact.html">Kontak Kami</a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- Header Icon -->
        <div class="header-icons">
          <a href="#" class="header-wrapicon1 dis-block">
            <img src="<?php echo base_url() ?>assets/depan/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
          </a>
          <div class="info">
          <h5 style="color:black"><?php echo $this->session->userdata('username'); ?>
          </div>

          <span class="linedivide1"></span>

          <div class="header-wrapicon2">
            <img src="<?php echo base_url() ?>assets/depan/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">0</span>

            <!-- Header cart noti -->
            <div class="header-cart header-dropdown">
              <ul class="header-cart-wrapitem">
                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="<?php echo base_url() ?>assets/depan/images/item-cart-01.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                      White Shirt With Pleat Detail Back
                    </a>

                    <span class="header-cart-item-info">
                      1 x $19.00
                    </span>
                  </div>
                </li>

                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="<?php echo base_url() ?>assets/depan/images/item-cart-02.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                      Converse All Star Hi Black Canvas
                    </a>

                    <span class="header-cart-item-info">
                      1 x $39.00
                    </span>
                  </div>
                </li>

                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="<?php echo base_url() ?>assets/depan/images/item-cart-03.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                      Nixon Porter Leather Watch In Tan
                    </a>

                    <span class="header-cart-item-info">
                      1 x $17.00
                    </span>
                  </div>
                </li>
              </ul>

              <div class="header-cart-total">
                Total: $75.00
              </div>

              <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    View Cart
                  </a>
                </div>

                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Check Out
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
      <!-- Logo moblie -->
      <a href="index.html" class="logo-mobile">
        <img src="<?php echo base_url() ?>assets/depan/images/icons/ananda1.png" alt="IMG-LOGO">
      </a>

      <!-- Button show menu -->
      <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
          <a href="#" class="header-wrapicon1 dis-block">
            <img src="<?php echo base_url() ?>assets/depan/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
          </a>

          <span class="linedivide2"></span>

          <div class="header-wrapicon2">
            <img src="<?php echo base_url() ?>assets/depan/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">0</span>

            <!-- Header cart noti -->
            <div class="header-cart header-dropdown">
              <ul class="header-cart-wrapitem">
                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="images/item-cart-01.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                      White Shirt With Pleat Detail Back
                    </a>

                    <span class="header-cart-item-info">
                      1 x $19.00
                    </span>
                  </div>
                </li>

                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="<?php echo base_url() ?>assets/depan/images/item-cart-02.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                      Converse All Star Hi Black Canvas
                    </a>

                    <span class="header-cart-item-info">
                      1 x $39.00
                    </span>
                  </div>
                </li>

                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="images/item-cart-03.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                      Nixon Porter Leather Watch In Tan
                    </a>

                    <span class="header-cart-item-info">
                      1 x $17.00
                    </span>
                  </div>
                </li>
              </ul>

              <div class="header-cart-total">
                Total: $75.00
              </div>

              <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    View Cart
                  </a>
                </div>

                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Check Out
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
      <nav class="side-menu">
        <ul class="main-menu">
          <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
            <span class="topbar-child1">
              Free shipping for standard order over $100
            </span>
          </li>

          <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
            <div class="topbar-child2-mobile">
              <span class="topbar-email">
                fashe@example.com
              </span>

              <div class="topbar-language rs1-select2">
                <select class="selection-1" name="time">
                  <option>USD</option>
                  <option>EUR</option>
                </select>
              </div>
            </div>
          </li>

          <li class="item-topbar-mobile p-l-10">
            <div class="topbar-social-mobile">
              <a href="#" class="topbar-social-item fa fa-facebook"></a>
              <a href="#" class="topbar-social-item fa fa-instagram"></a>
              <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
              <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
              <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>
          </li>
          <!-- Drop Menu -->
          <li class="item-menu-mobile">
            <a href="index.html">Home</a>
            <ul class="sub-menu">
              <li><a href="index.html">Homepage V1</a></li>
              <li><a href="home-02.html">Homepage V2</a></li>
              <li><a href="home-03.html">Homepage V3</a></li>
            </ul>
            <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
          </li>

         <li>
                <a href="home">Home</a>  
              </li>
              <li>
                <a href="gallery">Gallery</a>
              </li>

              <li>
                <a href="ketentuan">Tentang Kami</a>
              </li>
              <li>
                <a href="contact.html">Kontak Kami</a>
              </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Slide1 -->
  <section class="slide1">
    <div class="wrap-slick1">
      <div class="slick1">
        <div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url() ?>assets/depan/images/ananda.jpg);">
          <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
              3 Ananda Computindo
            </span>

            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
              Selamat Datang
            </h2>

            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
              <!-- Button -->
              <a href="login" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                Login
              </a>
            </div>
          </div>
        </div>

        <div class="item-slick1 item2-slick1" style="background-image: url(<?php echo base_url() ?>assets/depan/images/ananda3.jpg);">
          <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
              3 Ananda Computindo
            </span>

            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
              Selamat Datang
            </h2>

            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
              <!-- Button -->
              <a href="login" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                Login
              </a>
            </div>
          </div>
        </div>

        <div class="item-slick1 item3-slick1" style="background-image: url(<?php echo base_url() ?>assets/depan/images/ananda4.jpg);">
          <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
              3 Ananda Computindo
            </span>

            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
              Selamat Datang
            </h2>

            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
              <!-- Button -->
              <a href="login" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                login
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Banner -->

  <!-- Blog -->
  <section class="blog bgwhite p-t-94 p-b-65">
    <div class="container">
      <div class="sec-title p-b-52">
        <h3 class="m-text5 t-center">
          Our Blog
        </h3>
      </div>

      <div class="row">
        <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
          <!-- Block3 -->
          <div class="block3">
            <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
              <img src="<?php echo base_url() ?>assets/depan/images/blog-01.jpg" alt="IMG-BLOG">
            </a>

            <div class="block3-txt p-t-14">
              <h4 class="p-b-7">
                <a href="blog-detail.html" class="m-text11">
                  Black Friday Guide: Best Sales & Discount Codes
                </a>
              </h4>

              <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
              <span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

              <p class="s-text8 p-t-16">
                Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
          <!-- Block3 -->
          <div class="block3">
            <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
              <img src="<?php echo base_url() ?>assets/depan/images/blog-02.jpg" alt="IMG-BLOG">
            </a>

            <div class="block3-txt p-t-14">
              <h4 class="p-b-7">
                <a href="blog-detail.html" class="m-text11">
                  The White Sneakers Nearly Every Fashion Girls Own
                </a>
              </h4>

              <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
              <span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

              <p class="s-text8 p-t-16">
                Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
          <!-- Block3 -->
          <div class="block3">
            <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
              <img src="<?php echo base_url() ?>assets/depan/images/blog-03.jpg" alt="IMG-BLOG">
            </a>

            <div class="block3-txt p-t-14">
              <h4 class="p-b-7">
                <a href="blog-detail.html" class="m-text11">
                  New York SS 2018 Street Style: Annina Mislin
                </a>
              </h4>

              <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
              <span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

              <p class="s-text8 p-t-16">
                Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

    



  <!-- Footer -->
  <footer class="bg6 p-b-0 p-l-75 ">
    <div class="flex-w p-b-90">
      <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
        <h4 class="s-text12 p-b-30">
          GET IN TOUCH
        </h4>

        <div>
          <p class="s-text7 w-size27">
            Ada Pertanyaan ? Kunjungi toko kami di Jl. Ambalresmi,Ambal,Mirit,Kebumen,Jawa Tengah atau hubungi kami di (+62) 813-4790-7873
          </p>

          <div class="flex-m p-t-30">
            <a href="https://www.facebook.com/tri.computindo" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
            <a href="https://instagram.com/trianandacomputindo?igshid=1jduzh8me5tdo" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
            <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
            <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
            <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
          </div>
           <div class="t-center s-text8 p-t-20" style="text-align: left;">
        © 2020 3 Ananda Computindo <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="tentangkami" target="_blank">Colorlib</a>
      </div>
        </div>
      </div>

    
  
        
     
    </div>
  </footer>



  <!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
  </div>

  <!-- Container Selection1 -->
  <div id="dropDownSelect1"></div>



<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/select2/select2.min.js"></script>
  <script type="text/javascript">
    $(".selection-1").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/js/slick-custom.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/depan/vendor/sweetalert/sweetalert.min.js"></script>
  <script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to cart !", "success");
      });
    });

    $('.block2-btn-addwishlist').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");
      });
    });
  </script>

<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/depan/js/main.js"></script>

</body>
</html>
