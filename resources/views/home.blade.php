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
    <img src="{{ URL('https://media.istockphoto.com/photos/kid-with-colorful-beach-ball-picture-id171381654?k=20&m=171381654&s=612x612&w=0&h=Q6qEidKH5tWB2Npba_eWHcIxKdExIdYwG_z9DvKc0eY=')}}" class="img-fluid">
</div>
@endsection