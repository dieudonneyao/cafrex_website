
@extends('layouts.base')
@section('content')


  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Actualités</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Acualités</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Blog Area Start ##### -->
  <section class="famie-blog-area">
    <div class="container">
      <div class="row">
        <!-- Posts Area -->
        <div class="col-12 col-md-8">
          <div class="posts-area">

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
              <h6>Poste du <a href="#" class="post-date">18 Janvier 2022</a> / <a href="#" class="post-author">Sangaré</a></h6>
              <a href="#" class="post-title">SARA 2022</a>
              <img src="img/bg-img/26.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="300ms">
              <h6>Poste du <a href="#" class="post-date">10 Décembre 2021 </a> / <a href="#" class="post-author">Sangaré</a></h6>
              <a href="#" class="post-title">Salon de l'nnovation dans l'agriculture</a>
              <img src="img/bg-img/27.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="500ms">
              <h6>Poste du <a href="#" class="post-date">18 Août 2021</a> / <a href="#" class="post-author">Sangaré</a></h6>
              <a href="#" class="post-title">Début de la récolte du riz</a>
              <img src="img/bg-img/28.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="700ms">
              <h6>Poste du <a href="#" class="post-date">04 Mars 2021</a> / <a href="#" class="post-author">Sangaré</a></h6>
              <a href="#" class="post-title">Formation sur l'utilisation des engrais</a>
              <img src="img/bg-img/29.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

          </div>
         
        </div>

        <!-- Sidebar Area -->
        <div class="col-12 col-md-4">
          <div class="sidebar-area">

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <form action="#" method="post" class="search-widget-form">
                <input type="search" class="form-control" placeholder="Recherche">
                <button type="submit"><i class="icon_search" aria-hidden="true"></i></button>
              </form>
            </div>
            

            

          

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Meilleurs produits</h5>

              <!-- Single Best Products -->
              <div class="single-best-product d-flex align-items-center">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <a href="#"><img src="img/bg-img/riz.png" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Le riz local</a>
                  
                  <div class="product-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>

              <!-- Single Best Products -->
              <div class="single-best-product d-flex align-items-center">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <a href="#"><img src="img/bg-img/maïs.png" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Le Maïs</a>
                  <h6>$17.99</h6>
                  <div class="product-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>

              <!-- Single Best Products -->
              <div class="single-best-product d-flex align-items-center">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <a href="#"><img src="img/bg-img/coton.png" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Le coton</a>
                  <h6>$17.99</h6>
                  <div class="product-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->

  @endsection