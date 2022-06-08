 @extends('layouts.nav')

 @section('title')
 Edit Ticketing
 @endsection

 @section('container')
 <h1 class="mt-4">Edit Ticketing</h1>
 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
         Edit Ticketing
     </div>
     <div class="card-body">
         <form action="/places/{{ $place->id }}" method="POST">
             @method('PUT')
             @csrf
             <div class="mb-3">
                 <label for="name">Name</label>
                 <input type="text" name="name" class="form-control" value="{{ $place->name }}">
             </div>
             <div class="mb-3">
                 <label for="description">Description</label>
                 <input type="text" name="description" class="form-control" value="{{ $place->description }}">
             </div>
             <div class="mb-3">
                 <label for="price">Price</label>
                 <input type="number" name="price" class="form-control" value="{{ $place->price }}">
             </div>
             <div class="mb-3">
                 <label for="image">Image</label>
                 <input type="text" name="image" class="form-control" value="{{ $place->image }}">
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
         </form>
     </div>
 </div>
 @endsection