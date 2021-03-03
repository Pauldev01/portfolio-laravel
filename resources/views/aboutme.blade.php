@extends('template.main')
@section('content')
 <!-- ======= About Section ======= -->
 <section id="about" class="about mt-5">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>{{$aboutme[0]->h3}}</h3>
          <p class="font-italic">
            {{$aboutme[0]->para}}
          </p>
          <ul>
            @foreach ($aboutmeli as $item)
            <li><i class="{{$item->icon}}"></i> {{$item->li}}</li>
            @endforeach
          </ul>
          <p>
            {{$aboutme[0]->paraitalic}}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
@endsection