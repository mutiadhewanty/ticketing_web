 @extends('layouts.nav')

 @section('title')
 Edit Places
 @endsection

 @section('container')
 <h1 class="mt-4">Edit Places</h1>
 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
         Edit Places
     </div>
     <div class="card-body">
         <form action="{{ route('places.update', $place->id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')
             <div class="mb-3">
                 <label for="name" class="form-label @error('name') is-invalid @enderror">Nama</label>
                 <input type="text" class="form-control" name="name" value="{{ old('name', $place->name) }}">
                 <!-- error message untuk name -->
                 @error('name')
                 <div class="alert alert-danger mt-2">
                     {{ $message }}
                 </div>
                 @enderror
             </div>
             <div class="mb-3">
                 <div class="mb-3">
                     <div class="form-group">
                         <label for="description">Deskripsi</label>
                         <textarea class="form-control" name="description" required>{{ $place->description }}</textarea>
                     </div>
                 </div>
             </div>
             <div class="mb-3">
                 <label for="price" class="form-label @error('price') is-invalid @enderror">Price</label>
                 <input type="text" class="form-control" name="price" value="{{ old('price', $place->price) }}">
                 <!-- error message untuk price -->
                 @error('price')
                 <div class="alert alert-danger mt-2">
                     {{ $message }}
                 </div>
                 @enderror
             </div>
             <div class="mb-3">
                 <div class="form-group">
                     <div class="form-group">
                         <div class="form-group"><img src="{{ asset('storage/'.$place->image) }}" class="rounded" style="width: 100px"></br>
                             <label class="font-weight-bold">Gambar</label>
                             <input type="file" class="form-control" name="image">
                         </div>
                     </div>
                 </div>
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
         </form>
     </div>
 </div>
 @endsection