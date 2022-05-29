@extends('layouts.default')

@section('content')
<section>
    <div class="container nt-5">
        <div class="row">
        <div class="col-lg-8">
        <h1>Edit Ticket Transaction</h1>
            </div>
            <div class="col-lg-8">
            <form action="/ticketing/{{ $ticket->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $ticket->name }}"> <br>
                </div>
                
                <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $ticket->jumlah }}"> <br>
                </div>
               
                <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="number" name="total_harga" class="form-control" value="{{ $ticket->jumlah * 10000 }}"> <br>
                </div>
                
                <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $ticket->date }}"> <br>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>


</form>
            </div>

             
        </div>
    </div>
</section>
    
@endsection








