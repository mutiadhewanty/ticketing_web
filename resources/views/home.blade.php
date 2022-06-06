@extends('layouts.nav')

@section('title')
Dashboard
@endsection

@section('container')
<h1 class="mt-4">Selamat Datang di Website Ephoria</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Selamat Datang di Website Ephoria</li>
</ol>
<div class="col-12">
    <img src="{{ asset('Image\1.jpg')}}" class="img-fluid">
</div>
@endsection