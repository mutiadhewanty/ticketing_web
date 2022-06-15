@extends('layouts.nav')

@section('nama')
Create Place
@endsection

@section('container')
<h1 class="mt-4">Create Place</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Create Place
    </div>
    <div class="card-body">
        <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="font-weight-bold">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama">

                <!-- error message untuk name -->
                @error('name')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="font-weight-bold">Deskripsi</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Deskripsi">{{ old('description') }}</textarea>

                <!-- error message untuk description -->
                @error('description')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="font-weight-bold">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Masukkan Price">

                <!-- error message untuk name -->
                @error('price')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="font-weight-bold">GAMBAR</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                <!-- error message untuk name -->
                @error('image')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection