@extends('layouts.nav')

@section('title')
Ticketing
@endsection

@section('container')
<h1 class="mt-4">Detail Ticketing</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Ticketing</li>
</ol>
<div>
  <a href="/ticketing/create">
    <button type="button" class="btn btn-outline-primary">Tambah Data Ticketing</button>
  </a>
</div>
<br>
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
    DataTable Ticketing
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>Name</th>
          <th>Jumlah</th>
          <th>Total Harga</th>
          <th>Date</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Jumlah</th>
          <th>Total Harga</th>
          <th>Date</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach($ticketing as $ticket)
        <tr>
          <td>{{ $ticket->nama }}</td>
          <td>{{ $ticket->jumlah }}</td>
          <td>{{ $ticket->jumlah * 10000 }}</td>
          <td>{{ $ticket->data }}</td>
          <td>{{ $ticket->waktu }}</td>
          <td class="col col-lg-1">
            <a href="/ticketing/{{ $ticket->id }}/edit" class="btn btn-warning">Edit</a><br><br>
            <form action="/ticketing/{{ $ticket->id }}" method="POST">
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

<!-- @section('content')
<section>
  <div class="container nt-5">
    <div class="row">
      <div class="col-lg-8">
        <h1>Ticket Transaction</h1>
        <a href="/ticketing/create" class="btn btn-primary">Create</a>
      </div>

      <div class="col-lg-8 mt-5">
        <table class="table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Jumlah</th>
              <th>Total Harga</th>
              <th>Date</th>
              <th>Waktu</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ticketing as $ticket)
            <tr>
              <td>{{ $ticket->name }}</td>
              <td>{{ $ticket->jumlah }}</td>
              <td>{{ $ticket->jumlah * 10000 }}</td>
              <td>{{ $ticket->date }}</td>
              <td>{{ $ticket->waktu }}</td>

              <td>
                <a href="/ticketing/{{ $ticket->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="/ticketing/{{ $ticket->id }}" method="POST">
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
  </div>
</section>

@endsection -->