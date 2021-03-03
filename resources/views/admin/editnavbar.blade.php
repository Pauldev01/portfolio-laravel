@extends('template.mainadmn')
@section('content')
<div class="container text-center mt-5 mb-5">
  {{-- erreur --}}
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  
  <form method="POST" action="/update-nav/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="">Logo : </label>
        <input class="form-control" aria-describedby="texte" name="logo" value="{{old("logo") ? old("logo") : $edit->logo}}">
      </div>
      <div class="form-group">
          <label for="">Home : </label>
          <input class="form-control" aria-describedby="texte" name="home" value="{{old("home") ? old("home") : $edit->home}}">
        </div>
        <div class="form-group">
            <label for="">Aboutme : </label>
            <input class="form-control" aria-describedby="texte" name="aboutme" value="{{old("aboutme") ? old("aboutme") : $edit->aboutme}}">
          </div>
          <div class="form-group">
            <label for="">Creations : </label>
            <input class="form-control" aria-describedby="texte" name="creation" value="{{old("creation") ? old("creation") : $edit->creation}}">
          </div>
          <div class="form-group">
            <label for="">Competences : </label>
            <input class="form-control" aria-describedby="texte" name="competence" value="{{old("competence") ? old("competence") : $edit->competence}}">
          </div>
          <div class="form-group">
            <label for="">Contact : </label>
            <input class="form-control" aria-describedby="texte" name="contact" value="{{old("contact") ? old("contact") : $edit->contact}}">
          </div>
          <div class="form-group">
            <label for="">Backoffice : </label>
            <input class="form-control" aria-describedby="texte" name="backoffice" value="{{old("backoffice") ? old("backoffice") : $edit->backoffice}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection