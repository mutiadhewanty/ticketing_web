@extends('layouts.nav')

@section('title')
Tambah places
@endsection

@section('container')
<h1 class="mt-4">Tambah places</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tambah places
    </div>
    <div class="card-body">
        <form action="/places" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection