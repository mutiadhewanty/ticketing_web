@extends('layouts.default')

@section('content')
<section>
    <div class="container nt-5">
        <div class="row">
        <div class="col-lg-8">
        <h1>Create Place</h1>
            </div>
            <div class="col-lg-8">
            <form action="/places" method="POST">
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"> <br>
                </div>
                
                <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control"> <br>
                </div>
               
                <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control"> <br>
                </div>
                
                <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control"> <br>
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





