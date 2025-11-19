@extends('layout.appAdmin')
@section('title', 'Halaman Products')
@section('content')

<main class="py-4 px-md-4 ml-sm-auto col-lg-10">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Input Data Barang</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('store.product') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ old('kode_barang') }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" step="0.01" class="form-control" id="harga_barang" name="harga_barang" value="{{ old('harga_barang') }}" min="0" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button class="btn btn-secondary">BATAL</button>
            </form>

        </div>
    </div>
</main>

@endsection
