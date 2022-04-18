<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Euphoria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

@extends('layouts.default')

@section('content')
<section>
    <div class="container nt-5">
        <div class="row">
            <div class="col-lg-8">
            <h1>List Places</h1>
            <a href="/places/create" class="btn btn-primary">Create</a>
            </div>

            <div class="col-lg-8 mt-5">
            <table class="table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($places as $place)
        <tr>
            <td>{{ $place->name }}</td>
            <td>{{ $place->description }}</td>
            <td>{{ $place->price }}</td>
            <td>
                <a href="/places/{{ $place->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="/places/{{ $place->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete"  class="btn btn-danger">
                </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>

    
</table>
            </div>
        </div>
    </div>
</section>
    
@endsection


