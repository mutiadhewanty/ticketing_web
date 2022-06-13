@extends('layouts.nav')

@section('title')
Places
@endsection

@section('container')
<h1 class="mt-4">Places</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Places</li>
</ol>
<div>
  <a href="{{ route('places.create') }}">
    <button type="button" class="btn btn-outline-primary">Tambah Data Places</button>
  </a>
</div>
<br>
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
    DataTable Places
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach($places as $place)
        <tr>
          <td>{{ $place->name }}</td>
          <td>{{ $place->description }}</td>
          <td>{{ $place->price }}</td>
          <td class="text-center">
            <img src="{{ asset('storage/'.$place->image) }}" class="rounded" style="width: 150px">
          </td>
          <td class="col col-lg-1">
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('places.destroy', $place->id) }}" method="POST">
              <a href="{{ route('places.edit', $place->id) }}" class="btn btn-warning btn-rounded">EDIT</a><br><br>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-rounded">HAPUS</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection