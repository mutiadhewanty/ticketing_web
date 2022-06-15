@extends('layouts.nav')

@section('nama')
Edit Place
@endsection

@section('container')
<h1 class="mt-4">Edit Place</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Edit Place
    </div>
    <div class="card-body">
        <form action="{{ route('places.update', $places->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label @error('name') is-invalid @enderror">Nama</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $places->name) }}">
                <!-- error message untuk name -->
                @error('name')
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