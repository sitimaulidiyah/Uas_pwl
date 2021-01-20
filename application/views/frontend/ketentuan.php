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
              <li>
                <a href="login">Login</a>
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
        <img src="<?php echo base_url() ?>assets/depan/images/icons/logo.png" alt="IMG-LOGO">
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

          <li class="item-menu-mobile">
            <a href="index.html">Home</a>
            <ul class="sub-menu">
              <li><a href="index.html">Homepage V1</a></li>
              <li><a href="home-02.html">Homepage V2</a></li>
              <li><a href="home-03.html">Homepage V3</a></li>
            </ul>
            <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
          </li>

          <li class="item-menu-mobile">
            <a href="product.html">Shop</a>
          </li>

          <li class="item-menu-mobile">
            <a href="product.html">Sale</a>
          </li>

          <li class="item-menu-mobile">
            <a href="cart.html">Features</a>
          </li>

          <li class="item-menu-mobile">
            <a href="blog.html">Blog</a>
          </li>

          <li class="item-menu-mobile">
            <a href="about.html">About</a>
          </li>

          <li class="item-menu-mobile">
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Slide1 -->
  <div class="news" style="background: #White">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          
            <div class="news_item">
              <div class="container">
                 <div class="news_text">
                  <div class="event_title" ><h2 style="text-align: right;"><strong>Motto Perusahaanmu</strong></h2></div>
                  <div  style="padding-top:20px">
                  <p style="color:black; justify"><font face="Arial">1.&nbsp;&nbsp;&nbsp;Berisi tentang perusahaan berjalan dibidang apa dan blablabla.</p>
                  <p style="color:black; justify"><font face="Arial">2.&nbsp;&nbsp;&nbsp;Memiliki Kemampuan Untuk Menandatangani Kontrak Pengadaan Atau Pelepasan Assets</p>
                 </font>
               </div>

              </div>
            </div>
          </div>

           <div class="news_item">
              <div class="container">
                 <div class="news_text">
                  
                  <div  style="padding-top:30px">
                  <p style="color:black; justify"><font face="Arial">1.&nbsp;&nbsp;&nbsp;Surat Izin Usaha Resmi.</p></font>
                  <p style="color:black; justify"><font face="Arial">2.&nbsp;&nbsp;&nbsp;Memiliki Kemampuan Untuk Menandatangani Kontrak Pengadaan Atau Pelepasan Assets Perusahaan</p></font>
                  <p style="color:black; justify"><font face="Arial">3.&nbsp;&nbsp;&nbsp;Bukti Pembayaran Pajak </p></font>
                  <p style="color:black; justify"><font face="Arial">4.&nbsp;&nbsp;&nbsp;Melampirkan SPK (Surat Perjanjian Kemitraan)</p></font>
                  <p style="color:black; justify"><font face="Arial">5.&nbsp;&nbsp;&nbsp;Tidak Masuk Daftar Hitam </p></font>
                  <p style="color:black; justify"><font face="Arial">6.&nbsp;&nbsp;&nbsp;Tidak Membuat Pernyataan Palsu </p></font>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Banner -->

 

  <!-- Footer -->
 <!-- Footer -->
  <footer class="bg6 p-t-25 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
      <div class="w-size6 p-t-5 p-l-5 p-r-5 respon3">
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
