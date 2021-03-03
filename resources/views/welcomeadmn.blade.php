@extends('template.mainadmn')
@section('content')
<section class="container">
    <h1>On retrouves ici le Backoffice</h1>
    <span>Le site est modifiable via cette page.
        il est possible de creer modifier ou suprimer des entrées
    </span>
</section>
{{-- nav --}}
<section>
    <h2 class="text-center">Navbar </h2>
    <div>
        <table class="table table-primary">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Logo</th>
                <th scope="col">Lien</th>
                <th scope="col">About me</th>
                <th scope="col">Creations</th>
                <th scope="col">Competences</th>
                <th scope="col">Contact</th>
                <th scope="col">Backoffice</th>
                      
              </tr>
            </thead>
            <tbody>
                @foreach ($DBNav as $item)
                <th scope="row">{{$item->id}}</th>
                    <td>{{$item->logo}}</td>
                    <td>{{$item->home}}</td>
                    <td>{{$item->aboutme}}</td>
                    <td>{{$item->creation}}</td>
                    <td>{{$item->competence}}</td>
                    <td>{{$item->contact}}</td>
                    <td>{{$item->backoffice}}</td>
                    <td>{{$item->href}}</td>
                    <td> 
                        <form action="/delete-nav/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-nav/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </th>
                @endforeach
              
            </tbody>
          </table>
    </div>

</section>
{{-- welcome --}}
<section>
    <h2 class="text-center">Home </h2>
    <div>
        <table class="table table-primary">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">H1hero</th>
                <th scope="col">H2hero</th>
                <th scope="col">lien</th>
                <th scope="col">image</th>
                <th scope="col">service</th>
                <th scope="col">H2service</th>
                <th scope="col">paragraphe service</th>
                <th scope="col">lien #1 service</th>
                <th scope="col">paragraphe #1 service</th>
                <th scope="col">lien #2 service</th>
                <th scope="col">paragraphe #2 service</th>
                <th scope="col">lien #3 service</th>
                <th scope="col">paragraphe #3 service</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBwelcome as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->h1hero}}</td>
                    <td>{{$item->h2hero}}</td>
                    <td>{{$item->ahero}}</td>
                    <td>{{$item->imghero}}</td>
                    <td>{{$item->spanservice}}</td>
                    <td>{{$item->h2service}}</td>
                    <td>{{$item->pservice}}</td>
                    <td>{{$item->a1service}}</td>
                    <td>{{$item->p1service}}</td>
                    <td>{{$item->a2service}}</td>
                    <td>{{$item->p2service}}</td>
                    <td>{{$item->a3service}}</td>
                    <td>{{$item->p3service}}</td>
                    <td> 
                        <form action="/delete-titre/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>

</section>
{{-- about me --}}

@endsection