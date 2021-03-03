  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">{{$navbar[0]->logo}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">{{$navbar[0]->home}}</a></li>
          <li><a href="{{route('aboutme')}}">{{$navbar[0]->aboutme}}</a></li>
          <li><a href="{{route('creation')}}">{{$navbar[0]->creation}}</a></li>
          <li><a href="{{route('competence')}}">{{$navbar[0]->competence}}</a></li>
          <li><a href="{{route('contact')}}">{{$navbar[0]->contact}}</a></li>
          <li><a href="{{route('welcomeadmn')}}">{{$navbar[0]->backoffice}}</a></li>

        </ul>
      </nav>
      <!-- .nav-menu -->

    </div>
  </header><!-- End Header -->