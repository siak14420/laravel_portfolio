@extends('landing-page.layouts.app')

@section('content')
<main class="main">
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
          <h1>Better Solutions For Your Business</h1>
          <p>We are team of talented designers making websites with Bootstrap</p>
          <div class="d-flex">
            <a href="{{ route('login') }}" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('landing-page/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- /Hero Section -->

  <!--- Client Section -->
  @include('landing-page.client')

  <!-- About Section -->
  @include('landing-page.about')

  <!-- Why us Section -->
  @include('landing-page.whyus') 

  <!-- Skills Section -->
  @include('landing-page.skills')

</main>
@endsection