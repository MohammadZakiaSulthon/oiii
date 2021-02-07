<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banyumasan</title>
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/icons.css">
    <link rel="stylesheet" href="../assets/css/responsee.css">
    <link rel="stylesheet" href="../assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">   
    <link rel="stylesheet" href="../assets/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
  	<a target="_blank" class="hide-s" href="../assets/template/minimalista-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
       @include('pages.navbar')
      </header>
      
      <main role="main">
       @yield('content')
      </main>
      
      <!-- FOOTER -->
      <footer>
        <!-- Contact Us -->
        <!-- Main Footer -->
        <section class="section-small-padding text-center background-dark full-width">
          <div class="line">
            <div class="margin">
              <!-- Collumn 1 -->              
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <h3 class="text-size-16">Company</h3>
                <p class="text-size-14">
                   Institut Teknologi Telkom Purwokerto<br>
                   Fakultas Informatika<br> 
                   Rekayasa Perangkat Lunak<br>
                   Kelompok 12
                </p>               
              </div>
              <!-- Collumn 2 -->
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <h3 class="text-size-16">E-mail</h3>
                <p class="text-size-14">
                   18104040@ittelkom-pwt.ac.id<br>
                   18104038@ittelkom-pwt.ac.id<br>
                   18104049@ittelkom-pwt.ac.id
                </p>              
              </div>
              <!-- Collumn 3 -->
              <div class="s-12 m-12 l-4 ">
                <h3 class="text-size-16">Phone Numbers</h3>
                <p class="text-size-14">
                   0800 4521 800 50<br>
                   0450 5896 625 16<br>
                   0798 6546 465 15
                </p>             
              </div>
            </div>
          </div>  
        </section>
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
      </footer>
    </div>
    <script type="text/javascript" src="../assets/js/responsee.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="../assets/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../assets/js/template-scripts.js"></script> 
  </body>
</html>