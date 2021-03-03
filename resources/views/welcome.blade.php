@extends('template.main')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center top-center"  style="width: 100%; height: 100vh; background-size: cover; position: relative; background-image:url('{{asset('/assets/img/hero-bg.jpg')}}')">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>{{$welcome[0]->h1hero}}</h1>
      <h2>{{$welcome[0]->h2hero}}</h2>
      <a href="#about" class="btn-get-started scrollto">{{$welcome[0]->ahero}}</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <span>{{$welcome[0]->spansevice}}</span>
        <h2>{{$welcome[0]->h2service}}</h2>
        <p>{{$welcome[0]->pservice}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">{{$welcome[0]->a1service}}</a></h4>
            <p>{{$welcome[0]->p1service}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">{{$welcome[0]->a2service}}</a></h4>
            <p>{{$welcome[0]->p2service}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">{{$welcome[0]->a3service}}</a></h4>
            <p>{{$welcome[0]->p3service}}</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->
@include('partials.cta')
@endsection