@extends('layouts.nav')

@section('title')
Tambah Ticketing
@endsection

@section('container')
<h1 class="mt-4">Tambah Ticketing</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Edit Ticketing
    </div>
    <div class="card-body">
        <form action="/ticketing" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama">Name</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
            </div>
            <div class="mb-3">
                <label for="totHarga">Total Harga</label>
                <input type="number" name="totHarga" class="form-control">
            </div>
            <div class="mb-3">
                <label for="data">Date</label>
                <input type="date" name="data" id="data" class="form-control">
            </div>
            <div class="mb-3">
                <label for="time">Waktu</label>
                <input type="time" name="waktu" id="waktu" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection