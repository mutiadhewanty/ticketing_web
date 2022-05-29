@extends('layouts.default')

@section('content')
<section>
    <div class="container nt-5">
        <div class="row">
        <div class="col-lg-8">
        <h1>Create Booking Transaction</h1>
            </div>
            <div class="col-lg-8">
            <form action="/booking" method="POST">
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"> <br>
                </div>
                
                <div class="form-group">
                <label for="jumlah_orang">Jumlah</label>
                <input type="number" name="jumlah_orang" class="form-control"> <br>
                </div>
                
                <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control"> <br>
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








