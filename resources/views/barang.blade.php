@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Barang</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>UUID</th>
                <th>Category ID</th>
                <th>Supplier ID</th>
                <th>Kode Barang</th>
                <th>Harga Jual</th>
                <th>Harga Pokok</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->uuid }}</td>
                <td>{{ $barang->category_id }}</td>
                <td>{{ $barang->supplier_id }}</td>
                <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->harga_jual }}</td>
                <td>{{ $barang->harga_pokok }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->status }}</td>
                <td>
                    <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
