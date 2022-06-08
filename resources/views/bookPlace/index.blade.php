@extends('layouts.nav')

@section('title')
Booking
@endsection


@section('container')
<h1 class="mt-4">Booking</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Booking</li>
</ol>
<div>
  <a href="/booking/create">
    <button type="button" class="btn btn-outline-primary">Tambah Data Booking</button>
  </a>
</div>
<br>
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
    DataTable Booking
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>Name</th>
          <th>Jumlah Orang</th>
          <th>Total Harga</th>
          <th>Date</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Jumlah Orang</th>
          <th>Total Harga</th>
          <th>Date</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach($booking as $book)
        <tr>
          <td>{{ $book->name }}</td>
          <td>{{ $book->jumlah_orang }}</td>
          <td>{{ $book->total_harga }}</td>
          <td>{{ $book->date }}</td>
          <td>{{ $book->waktu }}</td>
          <td class="col col-lg-1">
            <a href="/booking/{{ $book->id }}/edit" class="btn btn-warning">Edit</a><br><br>
            <form action="/booking/{{ $book->id }}" method="POST">
              @method('DELETE')
              @csrf
              <input type="submit" value="Delete" class="btn btn-danger">
            </form>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection