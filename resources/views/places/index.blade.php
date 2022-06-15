@extends('layouts.nav')

@section('title')
Place
@endsection

@section('container')
<h1 class="mt-4">Place</h1>
<div>
    <a href="{{ route('places.create') }}">
        <button type="button" class="btn btn-outline-primary">Tambah Data Pemasukan</button>
    </a>
</div>
<br>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"> Place</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Place
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Price</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Price</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @forelse ($places as $blog)
                <tr>
                    <td>{{ $blog->name }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>{{ $blog->price }}</td>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/place/').$blog->image }}" class="rounded" style="width: 150px">
                    </td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('places.destroy', $blog->id) }}" method="POST">
                            <a href="{{ route('places.edit', $blog->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data Blog belum Tersedia.
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection