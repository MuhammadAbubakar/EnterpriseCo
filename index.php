<<<<<<< HEAD
<?php
include 'functions/config.inc.php';
include 'functions/settings.php';

$settings = new Settings;
$mysettings = $settings->getSettings();
$services  = $settings->getServices();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
   <title><?php echo $mysettings->Title; ?> - Home</title>
   <meta name="description" content="<?php echo $mysettings->Description; ?>">
   <?php include "tags.php" ?>
</head>

<body data-easing="easeInQuad">
 <div class="banner">
  <nav class="navbar navbar-expand-md navbar-dark hidden-lg-up fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#"><?php echo $mysettings->Title; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">اﻟﺮﺋﻴﺴﻴﻪ<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#services">ﺧﺪﻣﺎﺗﻨﺎ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#pricing">اﻻﺳﻌﺎﺭ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#team">ﻓﺮﻳﻖ اﻟﻌﻤﻞ</a>
      </li>
    </ul>
 <ul class="navbar-nav mr-auto">
  <li class="nav-item">
  <a href="contact.php"><button class="btn btn-primary">اﺗﺼﻞ ﺑﻨﺎ</button></a>
  </li>
 </ul>
  </div>
</div>
 </nav>

  <!-- HeroUI -->
  <div class="jumbotron bg-transparent text-center jumbotron-fluid sharp">
    <h1 class="display-3">اﻫﻼ,ﺑﺎﻟﻌﺎﻟﻢ !</h1>
  <section class="container">
    <h4 class="hidelg">ﺧﺪﻣﺎﺕ ﺗﻄﻮﻳﺮ اﻟﻤﻮاﻗﻊ</h4>
    <p class="lead p hidesm">
      ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ
ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ
ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ . ﺩﻳﻮاﺱ
ﺃﻳﻮﺗﻲ ﺃﺭﻳﺮﻱ ﺩﻭﻻﺭ ﺇﻥ ﺭﻳﺒﺮﻳﻬﻴﻨﺪﻳﺮﺃﻳﺖ ﻓﻮﻟﻴﻮﺑﺘﺎﺗﻲ ﻓﻴﻼﻳﺖ ﺃﻳﺴﺴﻲ ﻛﺎﻳﻠﻠﻴﻮﻡ ﺩﻭﻻﺭ ﺃﻳﻮ ﻓﻴﺠﺎﻳﺖ
ﻧﻴﻮﻻ ﺑﺎﺭاﻳﺎﺗﻴﻮﺭ. ﺃﻳﻜﺴﺴﻴﺒﺘﻴﻮﺭ ﺳﺎﻳﻨﺖ ﺃﻭﻛﻜﺎﻳﻜﺎﺕ ﻛﻴﻮﺑﺎﻳﺪاﺗﺎﺕ ﻧﻮﻥ ﺑﺮﻭاﻳﺪﻳﻨﺖ ,ﺳﻴﻮﻧﺖ اﻥ ﻛﻴﻮﻟﺒﺎ
ﻛﻴﻮ ﺃﻭﻓﻴﺴﻴﺎ ﺩﻳﺴﻴﺮﻳﻮﻧﺘﻤﻮﻟﻴﺖ اﻧﻴﻢ ﺃﻳﺪﻱ اﻳﺴﺖ ﻻﺑﻮﺭﻳﻮﻡ.
  </p>
<br><br>

<section class="container">
    <p class="p">ﺇﺫا ﺗﺒﻐﺎ ﺗﺴﺘﻌﻴﻦ ﺑﺨﺪﻣﺎﺗﻨﺎ اﻟﺮﺟﺎء اﻻﺗﺼﺎﻝ ﺑﻨﺎ</p>
</section>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="contact.php" role="button">ﻃﻠﺐ ﺧﺪﻣﺔ</a>
  </p>
    </div>
 </div>

<!-- Our Services -->
  <div class="container pt-3 pb-3 containers-service" data-aos="fade-up" data-aos-duration="3000" id="services">
   <div class="row ">
    <div class="col-md-12 text-center">
     <h1 class="display-4">ﺧﺪﻣﺎﺗﻨﺎ</h1>
     <p>اﻟﺨﺪاﻣﺎﺕ اﻟﻲ ﻧﻘﺪﻣﻬﺎ ﻟﻠﻌﻤﻼء.</p>
    </div>
   <div class="col-md-4 pt-3">
    <div class="text-center display-4">
     <h1 class="fa fa-bolt circle-icon fa-stack"></h1>
    </div>
    <h4 class="text-center">ﺳﺮﻋﺔ ﻓﺎﻟﺨﺪﻣﺔ</h4>
    <p class="text-center wrap">ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ
ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ
ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .</p>
   </div>

   <div class="col-md-4 pt-3">
    <div class="text-center display-4">
     <h1 class="fa fa-life-ring circle-icon fa-stack"></h1>
    </div>
    <h4 class="text-center">ﺩﻋﻢ ﻓﻨﻲ ﺧﺎﺹ</h4>
    <p class="text-center wrap">ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ
ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ
ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .</p>
   </div>

   <div class="col-md-4 pt-3">
    <div class="text-center display-4">
     <h1 class="fa fa-shield circle-icon fa-stack"></h1>
    </div>
    <h4 class="text-center">ﺣﻤﺎﻳﺔ ﻋﺎﻟﻴﻪ</h4>
    <p class="text-center wrap">ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ
ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ
ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .</p>
   </div>
  </div>
  </div>
 

<!-- Pricing Table -->
<div data-aos="zoom-in" class="pt5" data-aos-duration="2000"> 
<div class="pricing-header pt5 px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" id="pricing">
  <h1 class="display-4">اﺳﻌﺎﺭﻧﺎ</h1>
  <p class="lead">ﺟﺪﻭﻝ اﺳﻌﺎﺭ اﺣﺘﺮاﻓﻲ ﻟﻌﺮﺽ اﺳﻌﺎﺭﻙ ﻟﻠﻌﻤﻼء
  </p>
</div>

<div class="container mb-5 mt-5">
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ﺑﺪاﻳﻪ</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">3</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <a href="#" target="_blank" class="btn btn-outline-secondary mb-3">Order Now</a>
            </div>
        </div>
        <div class="card card-pricing popular shadow text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">اﺣﺘﺮاﻓﻲ</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">6</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <a href="#" target="_blank" class="btn btn-primary mb-3">Order Now</a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ﺃﻋﻤﺎﻝ</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">$<span class="price">9</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
               <a href="#" target="_blank" class="btn btn-outline-secondary mb-3">Order Now</a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ﻣﺸﺎﺭﻳﻊ</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span class="price">12</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <a href="#" target="_blank" class="btn btn-outline-secondary mb-3">Order Now</a>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Our Team Table -->
<div class="container" style="padding-bottom: 100px" data-aos="zoom-in-left" data-aos-duration="3000">
    <div class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto"  id="team">
      <h1 class="display-4">ﻓﺮﻳﻘﻨﺎ</h1>
      <p>اﻋﻀﺎء ﻓﺮﻳﻘﻨﺎ اﻻﺣﺘﺮاﻓﻲ</p>
    </div>
    <div class="row text-center">

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb"><img src="src/img/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">ﻣﺎﻧﻮﻳﻼ ﻧﻴﻔﻮﺭﻳﺴﻜﻲ</h5><span class="small text-uppercase text-muted">اﻟﺮﺋﻴﺲ اﻟﺘﻨﻔﻴﺬﻱ - ﻣﺆﺳﺲ</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb"><img src="src/img/teacher-2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">ﺻﻤﻮﺋﻴﻞ ﻫﺎﺭﺩﻱ</h5><span class="small text-uppercase text-muted">ﺷﺮﻳﻚ ﻣﺆﺳﺲ</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb"><img src="src/img/teacher-1.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">ﺗﻮﻡ ﺳﺎﻧﺪﺭﻻﻧﺪ</h5><span class="small text-uppercase text-muted">ﻣﺪﻳﺮ اﻟﻤﻮاﺭﺩ اﻟﺒﺸﺮﻳﺔ</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb">
             <img src="src/img/teacher-7.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">ﺟﻮﻥ ﺗﺎﺭﻟﻲ</h5><span class="small text-uppercase text-muted">ﻗﺴﻢ اﻟﺪﻋﻢ</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->
    </div>
</div>


<!-- Testimonials -->

<div data-aos="fade-up-left" data-aos-duration="2500">
  <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto">
 <div class="text-center">
  <h1 class="display-4">ﺷﻬﺎﺩاﺕ اﻟﻌﻤﻼء</h1>
  <p>ﻣﺎﺫا ﻳﻘﻮﻟﻮﻥ اﻟﻌﻤﻼء ﻋﻨﺎ ؟</p>
 </div>
 <div class="row">
  <div class="col-md-8 col-center m-auto">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators --> 
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
     <div class="item carousel-item active">
      <div class="img-box"><img src="src/img/1.jpg" alt=""></div>
      <p class="testimonial">ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .</p>
      <p class="overview"><b>ﺑﻮﻻ ﻭﻳﻠﺴﻮﻥ</b>, ﻣﺤﻠﻠﺔ ﺇﻋﻼﻣﻴﻪ</p>
      <div class="star-rating">
       <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        <li></li>
       </ul>
      </div>
     </div>

     <div class="item carousel-item">
      <div class="img-box"><img src="src/img/2.jpg" alt=""></div>
      <p class="testimonial">ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .</p>
      <p class="overview"><b>ﺃﻧﻄﻮﻧﻴﻮ ﻣﻮﺭﻳﻨﻮ</b>, ﻣﻄﻮﺭ ﻭﻳﺐ</p>
      <div class="star-rating">
       <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        <li></li>
       </ul>
      </div>
     </div>


     <div class="item carousel-item">
      <div class="img-box"><img src="src/img/3.jpg" alt=""></div>
      <p class="testimonial">ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .</p>
      <p class="overview"><b>ﻣﺎﻳﻜﻞ ﻫﻮﻟﺰ</b>, ﻣﺤﻠﻞ</p>
      <div class="star-rating">
       <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        <li></li>
       </ul>
      </div>
     </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
     <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
     <i class="fa fa-angle-right"></i>
    </a>
   </div>
  </div>
 </div>
</div>
</div>




<!-- Our Clients Combonent -->
  <div class="container containers-clients px-3 py-3 pt-md-5 pb-md-4 mx-auto" data-aos="flip-left" data-aos-duration="2000">
   <div class="row">
    <div class="col-md-12">
     <div class="text-center">
      <h1 class="display-4">ﻋﻤﻼﺋﻨﺎ</h1>
      <p>اﻓﻀﻞ اﻟﻌﻤﻼء اﻟﺬﻳﻦ ﻧﻔﺘﺨﺮ ﻓﻴﻬﻢ</p>
     </div>
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
   </div>
  </div>

<!-- Newsletter Form -->
<section  class="newsletter text-white px-3 py-3 pt-md-5 pb-md-5 mx-auto bg-primary">
<div class="container">
<div class="row">
<div class="col-sm-12">
 <div class="content">
  <h2 class="text-white">اﺷﺘﺮﻙ ﻣﻌﻨﺎ ﻓﻲ ﻧﺸﺮﺗﻨﺎ اﻻﺧﺒﺎﺭﻳﻪ</h2>
  <form action="<?php echo $services->Mailchimp; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate >
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div> 
  <div class="input-group" data-aos="zoom-out">
   <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="ﺃﺩﺧﻞ ﺑﺮﻳﺪﻙ اﻻﻟﻜﺘﺮﻭﻧﻲ">
         <span class="input-group-btn">
         <button class="btn btn-primary" type="submit">ﺃﺷﺘﺮﻙ اﻻﻥ</button>
         </span>
    </div>
  </form>
 </div>
</div>
</div>
</div>
</section>

<!-- Footer -->
<div data-aos="slide-up">
  <div class="container text-center pt-5">
      <ul class="list-inline h4">
        <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-twitter fa-stack circle-twitter"></i></a></li>
        <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-facebook fa-stack circle-facebook"></i></a></li>
        <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-linkedin fa-stack circle-linkedin"></i></a></li>
        <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-instagram fa-stack circle-instagram"></i></a></li>
        <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-snapchat-ghost fa-stack circle-snapchat"></i></a></li>
        <li></li>
      </ul>
  </div>  
</div>


 <div class="container">
	<?php include "components/footer.php"; ?>
 </div>

</body>

 <script type="text/javascript">
    var scroll = new SmoothScroll('a[href*="#"]');
    if (document.querySelector('[data-easing]')) {
      var linear = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
    }


     $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('bg-primary');
            }

            else {
                  $('nav').removeClass('bg-primary');
            }
      })


  AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99,
  delay: 50,
  duration:2000, // the delay on throttle used while scrolling the page (advanced)
  easing: 'ease', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});
 </script>
</html>
=======
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
   <title>EnterpriseCo - Home</title>
   <?php include "tags.php" ?>
</head>

<body data-easing="easeInQuad">
 <div class="banner">
  <nav class="navbar navbar-expand-md navbar-dark bg-transparent hidden-lg-up fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">EnterpriseCo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">الرئيسيه<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#services">خدماتنا</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#pricing">الاسعار</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#team">فريق العمل</a>
      </li>
    </ul>
 <ul class="navbar-nav mr-auto">
  <li class="nav-item">
  <a href="contact.php"><button class="btn btn-primary">اتصل بنا</button></a>
  </li>
 </ul>
  </div>
</div>
 </nav>

  <!-- HeroUI -->
  <div class="jumbotron bg-transparent text-center jumbotron-fluid sharp">
    <h1 class="display-3">اهلا,بالعالم !</h1>
  <section class="container">
    <h4 class="hidelg">خدمات تطوير المواقع</h4>
    <p class="lead p hidesm">
      لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
  </p>
<br><br>

<section class="container">
    <p class="p">إذا تبغا تستعين بخدماتنا الرجاء الاتصال بنا</p>
</section>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="contact.php" role="button">طلب خدمة</a>
  </p>
    </div>
 </div>

<!-- Our Services -->
  <div class="container pt-3 pb-3 containers-service" id="services">
   <div class="row ">
    <div class="col-md-12 text-center">
     <h1 class="display-4">خدماتنا</h1>
     <p>الخدامات الي نقدمها للعملاء.</p>
    </div>
   <div class="col-md-4 pt-3">
    <div class="text-center display-4">
     <h1 class="fa fa-bolt circle-icon fa-stack"></h1>
    </div>
    <h4 class="text-center">سرعة فالخدمة</h4>
    <p class="text-center wrap">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
   </div>

   <div class="col-md-4 pt-3">
    <div class="text-center display-4">
     <h1 class="fa fa-life-ring circle-icon fa-stack"></h1>
    </div>
    <h4 class="text-center">دعم فني خاص</h4>
    <p class="text-center wrap">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
   </div>

   <div class="col-md-4 pt-3">
    <div class="text-center display-4">
     <h1 class="fa fa-shield circle-icon fa-stack"></h1>
    </div>
    <h4 class="text-center">حماية عاليه</h4>
    <p class="text-center wrap">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
   </div>
  </div>
  </div>
 

<!-- Pricing Table -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" id="pricing">
  <h1 class="display-4">اسعارنا</h1>
  <p class="lead">جدول اسعار احترافي لعرض اسعارك للعملاء
  </p>
</div>

<div class="container mb-5 mt-5">
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">بدايه</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">3</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
            </div>
        </div>
        <div class="card card-pricing popular shadow text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">احترافي</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">6</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <a href="https://www.totoprayogo.com" target="_blank" class="btn btn-primary mb-3">Order Now</a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">أعمال</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">$<span class="price">9</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">مشاريع</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span class="price">12</span><span class="h6 text-muted ml-2">/ شهرياً</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
            </div>
        </div>
    </div>
</div>

<!-- Our Team Table -->
<div class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto"  id="team">
 <h1 class="display-4">فريقنا</h1>
<p>اعضاء فريقنا الاحترافي</p>
</div>
<div class="container">
    <div class="row text-center">

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb"><img src="src/img/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">مانويلا نيفوريسكي</h5><span class="small text-uppercase text-muted">الرئيس التنفيذي - مؤسس</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb"><img src="src/img/teacher-2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">صموئيل هاردي</h5><span class="small text-uppercase text-muted">شريك مؤسس</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb"><img src="src/img/teacher-1.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">توم ساندرلاند</h5><span class="small text-uppercase text-muted">مدير الموارد البشرية</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4 drawb">
             <img src="src/img/teacher-7.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">جون تارلي</h5><span class="small text-uppercase text-muted">قسم الدعم</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <li></li>
                </ul>
            </div>
        </div><!-- End -->
    </div>
</div>


<!-- Testimonials -->
<div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto">
 <div class="text-center">
  <h1 class="display-4">شهادات العملاء</h1>
  <p>ماذا يقولون العملاء عنا ؟</p>
 </div>
 <div class="row">
  <div class="col-md-8 col-center m-auto">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators --> 
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
     <div class="item carousel-item active">
      <div class="img-box"><img src="src/img/1.jpg" alt=""></div>
      <p class="testimonial">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
      <p class="overview"><b>بولا ويلسون</b>, محللة إعلاميه</p>
      <div class="star-rating">
       <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        <li></li>
       </ul>
      </div>
     </div>

     <div class="item carousel-item">
      <div class="img-box"><img src="src/img/2.jpg" alt=""></div>
      <p class="testimonial">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
      <p class="overview"><b>أنطونيو مورينو</b>, مطور ويب</p>
      <div class="star-rating">
       <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        <li></li>
       </ul>
      </div>
     </div>


     <div class="item carousel-item">
      <div class="img-box"><img src="src/img/3.jpg" alt=""></div>
      <p class="testimonial">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
      <p class="overview"><b>مايكل هولز</b>, محلل</p>
      <div class="star-rating">
       <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        <li></li>
       </ul>
      </div>
     </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
     <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
     <i class="fa fa-angle-right"></i>
    </a>
   </div>
  </div>
 </div>
</div>


<!-- Our Clients Combonent -->
  <div class="container containers-clients px-3 py-3 pt-md-5 pb-md-4 mx-auto">
   <div class="row">
    <div class="col-md-12">
     <div class="text-center">
      <h1 class="display-4">عملائنا</h1>
      <p>افضل العملاء الذين نفتخر فيهم</p>
     </div>
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
    <div class="col-md-3 text-center pt-3">
     <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand">
    </div>
   </div>
  </div>

<!-- Newsletter Form -->
 <section class="newsletter text-white px-3 py-3 pt-md-5 pb-md-5 mx-auto bg-primary">
<div class="container">
<div class="row">
<div class="col-sm-12">
 <div class="content">
  <h2 class="text-white">اشترك معنا في نشرتنا الاخباريه</h2>
  <form method="POST" action="#">
  <div class="input-group">
   <input type="email" class="form-control" placeholder="أدخل بريدك الالكتروني">
         <span class="input-group-btn">
         <button class="btn btn-primary" type="submit">أشترك الان</button>
         </span>
    </div>
  </form>
 </div>
</div>
</div>
</div>
</section>

<!-- Footer -->
<div class="container text-center pt-5">
    <ul class="list-inline h4">
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-twitter fa-stack circle-twitter"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-facebook fa-stack circle-facebook"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-linkedin fa-stack circle-linkedin"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-instagram fa-stack circle-instagram"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-snapchat-ghost fa-stack circle-snapchat"></i></a></li>
      <li></li>
    </ul>
</div>


 <div class="container">
  <footer class="pt-4 my-md-5 pt-md-5 border-top footer">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="src/img/beard.svg" alt="" width="30" height="30" class="img-fluid">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019 - صنع بكل <span style="color: #e74c3c;" class="fa fa-heart"></span> من قبل سنيك ديزاين</small>
    <ul class="list-inline">
      <li class="list-inline-item payment">
		  <i class="fa fa-cc-paypal"></i>
	  </li>
      <li class="list-inline-item payment">
		  <i class="fa fa-cc-visa"></i>
	  </li>
      <li class="list-inline-item payment">
		  <i class="fa fa-cc-mastercard"></i>
	  </li>
      <li class="list-inline-item payment">
		  <i class="fa fa-cc-discover"></i>
	  </li>
      <li class="list-inline-item payment">
		  <i class="fa fa-cc-amex"></i>
      </li>
      <li></li>
    </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link" href="#">Cool stuff</a></li>
          <li><a class="link" href="#">Random feature</a></li>
          <li><a class="link" href="#">Team feature</a></li>
          <li><a class="link" href="#">Stuff for developers</a></li>
          <li><a class="link" href="#">Another one</a></li>
          <li><a class="link" href="#">Last time</a></li>
           <li></li>
        </ul>
        
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link" href="#">Resource</a></li>
          <li><a class="link" href="#">Resource name</a></li>
          <li><a class="link" href="#">Another resource</a></li>
          <li><a class="link" href="#">Final resource</a></li>
           <li></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link" href="#">Team</a></li>
          <li><a class="link" href="#">Locations</a></li>
          <li><a class="link" href="#">Privacy</a></li>
          <li><a class="link" href="#">Terms</a></li>
           <li></li>
        </ul>
      </div>
    </div>
  </footer>
 </div>

</body>

 <script type="text/javascript">
    var scroll = new SmoothScroll('a[href*="#"]');
    if (document.querySelector('[data-easing]')) {
      var linear = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
    }


     $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('bg-primary');
            }

            else {
                  $('nav').removeClass('bg-primary');
            }
      })
 </script>
</html>
>>>>>>> 469474d06860b514ba78353c29c2774474618886
