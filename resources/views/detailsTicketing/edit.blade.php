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
         <form action="/ticketing/{{ $ticket->id }}" method="POST">
             @method('PUT')
             @csrf
             <div class="mb-3">
                 <label for="name">Name</label>
                 <input type="text" name="name" class="form-control" value="{{ $ticket->nama }}">
             </div>
             <div class="mb-3">
                 <label for="jumlah">Jumlah</label>
                 <input type="number" name="jumlah" class="form-control" value="{{ $ticket->jumlah }}">
             </div>
             <div class="mb-3">
                 <label for="total_harga">Total Harga</label>
                 <input type="number" name="total_harga" class="form-control" value="{{ $ticket->jumlah * 10000 }}">
             </div>
             <div class="mb-3">
                 <label for="date">Date</label>
                 <input type="date" name="date" id="date" class="form-control" value="{{ $ticket->date }}">
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
         </form>
     </div>
 </div>
 @endsection