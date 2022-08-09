
@extends('layouts.base')
@section('title', 'Accueil')
@section('content')

    <div class="welcome-slides owl-carousel">
        <!-- Single Welcome Slides -->

        <div class="single-welcome-slides bg-img  jarallax" style="background-image: url(img/bg-img/tracteurslide.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-10">
                        <div class="welcome-content">
                            <h1 data-animation="fadeInUp" data-delay="200ms">CAFREX : La production agricole est notre métier.</h1>
                            <p data-animation="fadeInUp" data-delay="400ms">
                                Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                                Morbi arcu mi, dictum eu luala, dapibus
                                interdum mollis.
                            </p>
                            <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-welcome-slides bg-img  jarallax" style="background-image: url(img/bg-img/PRODUITS.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-10">
                        <div class="welcome-content">
                            <h1 data-animation="fadeInUp" data-delay="200ms">Nos produits semi-finis et finis sont la fierté de notre pays .</h1>
                            <p data-animation="fadeInUp" data-delay="400ms">
                                Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                                Morbi arcu mi, dictum eu luala, dapibus
                                interdum mollis.
                            </p>
                            <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- Single Welcome Slides -->
          <div class="single-welcome-slides bg-img jarallax" style="background-image: url(img/bg-img/transformationslide.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-10">
                        <div class="welcome-content">
                            <h1 data-animation="fadeInDown" data-delay="200ms">Nous aidons à la promotion des cultures et des cultivivateurs.</h1>
                            <p data-animation="fadeInDown" data-delay="400ms">
                                Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                                Morbi arcu mi, dictum eu luala, dapibus
                                interdum mollis.
                            </p>
                            <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slides -->
        <div class="single-welcome-slides bg-img jarallax" style="background-image: url(img/bg-img/donsslide.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-10">
                        <div class="welcome-content">
                            <h1 data-animation="fadeInDown" data-delay="200ms">Nous accompagnons nos producteurs par notre expertise.</h1>
                            <p data-animation="fadeInDown" data-delay="400ms">
                                Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                                Morbi arcu mi, dictum eu luala, dapibus
                                interdum mollis.
                            </p>
                            <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
  <!-- ##### Hero Area End ##### -->

 

  <!-- ##### About Us Area Start ##### -->
 
  <div class="container service_mixte">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-l2">
          <div class="about_box">
            <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-l2">
          <div class="bg-img">
              <img class="img-fluid" src="img/bg-img/9.jpg" alt="">
          </div>
        </div>
      </div>
  </div>
  <!-- ##### About Us Area End ##### -->

  <div class="chiffre container">
    <div class="row serve1">
      <div class="boximage services-thumbnail bg-img col-sm-12 col-md-6 col-lg-6 col-xl-6" style="background-image: url('img/bg-img/fond1.png');">
      </div>
      <div class="boite col-sm-12 col-md-6 col-lg-6 col-xl-6">       
        <div>
          <h2 class="titreserve">AGRICULTURE</h2>
          <span class="paraserve">
            Production - Transformation - Commercialisation - Expertise.
          </span>
          

        </div>
        <a href="/services" class="btn-sm famie-btn mt-30">En savoir plus</a>
      </div>
    </div>
    <div class="row serve1">
      <div class="boite2 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <div>
      <h2 class="titreserve">ELEVAGE </h2>
        <span class="paraserve">          
          Boeufs - Mouton - Volailles.
        </span>
        </div>
        <a href="/services" class="btn-sm famie-btn mt-30">En savoir plus</a>
      </div>
      <div class="boximage col-12 col-md-6 services-thumbnail bg-img" style="background-image: url('img/bg-img/ELEVAGE.jpg');" >
      </div>
      
    </div>

  </div>

  <!-- ##### Our Products Area Start ##### -->
  <section class="our-products-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>Produits Semi-Finis et Finis</p>
            <h2><span>Nos produits</span> sont Bio et de qualité</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Single Product Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
            <!-- Product Thumbnail -->
            <div class="product-thumbnail">
              <img src="img/bg-img/prod5cafe.jpg" alt="">
              <!-- Product Tags -->
              <span class="product-tags">Bio</span>
              <!-- Product Meta Data -->
              <div class="product-meta-data">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>
              </div>
            </div>
            <!-- Product Description -->
            <div class="product-desc text-center pt-4">
              <a href="#" class="product-title">Café</a>
              <h6 class="price"></h6>
            </div>
          </div>
        </div>

        <!-- Single Product Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="300ms">
            <!-- Product Thumbnail -->
            <div class="product-thumbnail">
              <img src="img/bg-img/prod1ana.jpg" alt="">
              <!-- Product Tags -->
              
              <!-- Product Meta Data -->
              <div class="product-meta-data">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>
              </div>
            </div>
            <!-- Product Description -->
            <div class="product-desc text-center pt-4">
              <a href="#" class="product-title">Anacarde</a>
              <h6 class="price"></h6>
            </div>
          </div>
        </div>

        <!-- Single Product Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="500ms">
            <!-- Product Thumbnail -->
            <div class="product-thumbnail">
              <img src="img/bg-img/prod2cacao.jpg" alt="">
              <!-- Product Tags -->
              
              <!-- Product Meta Data -->
              <div class="product-meta-data">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>
              </div>
            </div>
            <!-- Product Description -->
            <div class="product-desc text-center pt-4">
              <a href="#" class="product-title">Tomate</a>
              <h6 class="price"></h6>
            </div>
          </div>
        </div>

        <!-- Single Product Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="700ms">
            <!-- Product Thumbnail -->
            <div class="product-thumbnail">
              <img src="img/bg-img/prod3mais.jpg" alt="">
              <!-- Product Tags -->
              
              <!-- Product Meta Data -->
              <div class="product-meta-data">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>
              </div>
            </div>
            <!-- Product Description -->
            <div class="product-desc text-center pt-4">
              <a href="#" class="product-title">Maïs</a>
              <h6 class="price"><span></span> </h6>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-12">
          <div class="gotoshop-btn text-center wow fadeInUp" data-wow-delay="900ms">
            <a href="/products" class="btn famie-btn">Tous les produits</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Our Products Area End ##### -->

  <!-- ##### Newsletter Area Start ##### -->
<section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/newsletter.png');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="newsletter-content">
            <!-- Section Heading -->
            <div class="section-heading white text-center">
              <p>En savoir plus</p>
              <h2><span>Nos Services</span> Vous Intéresse</h2>
              <img src="img/core-img/decor2.png" alt="">
            </div>
            <p class="text-white mb-50 text-center">Nous serons heureux de vous informer de toutes nouveautés concernant nos prouits et services. De plus nos experts sont disponible pour vous aidez à travers de petites astuces
              qui vous aideront à mieux avoir la main sur votre cycle et circuit de production.</p>
          </div>
        </div>
      </div>
      <!-- Newsletter Form -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Entrer votre email">
            <button type="submit" class="btn famie-btn">Souscrire</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Newsletter Area End ##### -->
   <!--Start Brand area-->
  
  </div>

    

  
  @endsection