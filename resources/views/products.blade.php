@extends('layout.appAdmin')
@section('title', 'Halaman Products')
@section('content')

<main class="py-4 px-md-4 ml-sm-auto col-lg-10">
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Products</h2>
            <a href="{{ route('tambah.product') }}" class="btn btn-success">Tambah Produk</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        @foreach ($product as $data)        
        <tbody>
            <tr>
                <th>{{ $loop->iteration + $product->firstItem() - 1 }}</th>
                <td>{{ $data->kode_barang }}</td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->jumlah }}</td>
                <td>{{ $data->harga_barang }}</td>
                <td>
                    {{-- Menampilkan form edit --}}
                    <a href="{{ route('edit', $data->kode_barang) }}" class="btn btn-warning btn-sm">EDIT</a>
                    {{-- Eksekusi perintah hapus dengan menambahkan onclick --}}
                    <form action="{{ route('delete.product', $data->kode_barang) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="HAPUS" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="d-flex justify-content-between align-items-center my-3">
        <div>
            Showing {{ $product->firstItem() }} to {{ $product->lastItem() }} of {{ $product->total() }} results
        </div>
        <div>
            @if ($product->onFirstPage())
                <button class="btn btn-secondary" disabled>&lt;</button>
            @else
                <a href="{{ $product->previousPageUrl() }}" class="btn btn-primary">&lt;</a>
            @endif

            @if ($product->hasMorePages())
                <a href="{{ $product->nextPageUrl() }}" class="btn btn-primary">&gt;</a>
            @else
                <button class="btn btn-secondary" disabled>&gt;</button>
            @endif
        </div>
    </div>
</main>
@endsection
