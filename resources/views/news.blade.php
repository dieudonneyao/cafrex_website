
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

  <div class="lightbox">
  <div class="multi-carousel">
    <div class="multi-carousel-inner">
      <div class="multi-carousel-item">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/1.webp"
          data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
          alt="Table Full of Spices"
          class="w-100"
        />
      </div>
      <div class="multi-carousel-item">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/2.webp"
          data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/2.webp"
          alt="Winter Landscape"
          class="w-100"
        />
      </div>
      <div class="multi-carousel-item">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/3.webp"
          data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/3.webp"
          alt="View of the City in the Mountains"
          class="w-100"
        />
      </div>
      <div class="multi-carousel-item">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/4.webp"
          data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/4.webp"
          alt="Place Royale Bruxelles"
          class="w-100"
        />
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      tabindex="0"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      tabindex="0"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</div>

<!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->

  @endsection