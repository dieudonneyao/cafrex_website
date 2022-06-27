
@extends('layouts.base')
@section('content')


  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>News</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">News</li>
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
              <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Peter Crough</a></h6>
              <a href="#" class="post-title">Rising cattle supplies see beef export lifted</a>
              <img src="img/bg-img/26.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="300ms">
              <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Peter Crough</a></h6>
              <a href="#" class="post-title">Why innovation is key to maintaining our export market share</a>
              <img src="img/bg-img/27.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="500ms">
              <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Peter Crough</a></h6>
              <a href="#" class="post-title">Cattle marts: Cows take a hit at the ringside</a>
              <img src="img/bg-img/28.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="700ms">
              <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Peter Crough</a></h6>
              <a href="#" class="post-title">Malting barley price negotiations set to commence</a>
              <img src="img/bg-img/29.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis quam at...
              </p>
            </div>

          </div>

          <!-- pagination -->
          <nav>
            <ul class="pagination wow fadeInUp" data-wow-delay="900ms">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>

        <!-- Sidebar Area -->
        <div class="col-12 col-md-4">
          <div class="sidebar-area">

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <form action="#" method="post" class="search-widget-form">
                <input type="search" class="form-control" placeholder="Search">
                <button type="submit"><i class="icon_search" aria-hidden="true"></i></button>
              </form>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Catagories</h5>
              <!-- Cata List -->
              <ul class="cata-list">
                <li><a href="#">Recipe Collections</a></li>
                <li><a href="#">The advantage of knowledge</a></li>
                <li><a href="#">Organic Farming</a></li>
                <li><a href="#">Farming &amp; Agricultural</a></li>
                <li><a href="#">Special Diet</a></li>
                <li><a href="#">How to Manage Soil Fertility</a></li>
              </ul>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Recent News</h5>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/30.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">US milk production continues its upward trajectory for 2018</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/31.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">USDA'S crop ratings more ahead for corn, drop for soybeans</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/32.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Auction report: Bids aplenty for massive John Deere collection</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/33.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Wool prices expected to remain competitive as demand is grow</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Tags</h5>
              <!-- Tags -->
              <ul class="famie-tags">
                <li><a href="#">All product</a></li>
                <li><a href="#">Freshy Fruit</a></li>
                <li><a href="#">Sweet Corn</a></li>
                <li><a href="#">Chicken</a></li>
                <li><a href="#">Organic</a></li>
                <li><a href="#">Farm Practices</a></li>
                <li><a href="#">Meat</a></li>
                <li><a href="#">Special Recipe</a></li>
              </ul>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Best products</h5>

              <!-- Single Best Products -->
              <div class="single-best-product d-flex align-items-center">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <a href="#"><img src="img/bg-img/34.jpg" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Strawberry</a>
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
                  <a href="#"><img src="img/bg-img/35.jpg" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Pure Honey</a>
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
                  <a href="#"><img src="img/bg-img/36.jpg" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Green Apple</a>
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