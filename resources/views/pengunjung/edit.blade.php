@extends('layouts.nav')

@section('title')
Edit Pengunjung
@endsection

@section('container')
<h1 class="mt-4">Edit Admin</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Edit Pengunjung</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Edit Pengunjung
    </div>
    <div class="card-body">
        <form action="/pengunjungUser/{{ $pengunjungUser->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" value="{{ $pengunjungUser->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $pengunjungUser->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection