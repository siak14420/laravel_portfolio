@extends('user-view.layout')

@section('title', 'Home')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
        <img src="{{ asset('user-view/img/hero-img.jpg') }}" alt="" data-aos="fade-in">
        <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <h2>I am Morgan Freeman</h2>
            <p><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
        </div>
        </section>

        <!--- About Section -->
        @include('user-view.about')

        <!-- Resume Section -->
        @include('user-view.resume')

        <!-- Service Section -->
        @include('user-view.service')

        <!-- Stats Section -->
        @include('user-view.stats') 
        
        <!-- Portfolio Section -->
        @include('user-view.portfolio')
        
        <!-- Testimonials Section -->
        @include('user-view.testimonial') 
        
        <!-- Contact Section -->
        @include('user-view.contact')
    </main>    
@endsection
