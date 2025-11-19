@extends('layout.appAdmin')
@section('title', 'Halaman Orders')
@section('content')
    <main class="py-4 px-md-4 ml-sm-auto col-lg-10">
                <div class="card shadow p-4 mx-auto border-0" style="width: 28rem;">
                    <h4 class="mx-auto">Orders Form</h4>
                    <div class="card-body p-0">
                        <form action="">
                            <input type="text" placeholder="Kode Barang" class="form-control mb-3">
                            <input type="text" placeholder="Nama Barang" class="form-control mb-3">
                            <input type="number" placeholder="Jumlah Barang" class="form-control mb-3">
                            <input type="number" placeholder="Harga Barang" class="form-control mb-3">
                            <input type="submit" value="Submit" class="btn btn-primary w-100">
                        </form>
                    </div>
                </div>
            </main>
@endsection
