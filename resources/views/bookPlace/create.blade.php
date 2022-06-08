@extends('layouts.nav')

@section('title')
Tambah Booking
@endsection

@section('container')
<h1 class="mt-4">Tambah Booking</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Edit Booking
    </div>
    <div class="card-body">
        <form action="/booking" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="jumlah_orang">Jumlah</label>
                <input type="number" name="jumlah_orang" class="form-control">
            </div>
            <div class="mb-3">
                <label for="total_harga">Total Harga</label>
                <input type="number" name="total_harga" class="form-control">
            </div>
            <div class="mb-3">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control">
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