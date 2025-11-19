@extends('layout.appAdmin')
@section('title', 'Halaman Customers')
@section('content')

<main class="py-4 px-md-4 ml-sm-auto col-lg-10">
                <div class="card shadow p-4 mx-auto border-0" style="width: 28rem;">
                    <h4 class="mx-auto">Customers Form</h4>
                    <div class="card-body p-0">
                        <form action="">
                            <input type="text" placeholder="Kode Customer" class="form-control mb-3">
                            <input type="text" placeholder="Nama Customer" class="form-control mb-3">
                            <input type="text" placeholder="Alamat" class="form-control mb-3">
                            <input type="number" placeholder="No.HP" class="form-control mb-3">
                            <input type="submit" value="Submit" class="btn btn-primary w-100">
                        </form>
                    </div>
                </div>

                <h2 class="mt-5">Customers List</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Kode Customer</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No.HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">BA01</th>
                        <td>Nailul Muna</td>
                        <td>Seoul, Korea Selatan</td>
                        <td>+82 892-2978-3175</td>
                        </tr>
                        <tr>
                        <th scope="row">CA01</th>
                        <td>Michael Gunawan</td>
                        <td>California, Amerika Serikat</td>
                        <td>+1 866-7250-0122</td>
                        </tr>
                        <tr>
                        <th scope="row">DA01</th>
                        <td>Ian Sopian</td>
                        <td>Hongdae, Korea Selatan</td>
                        <td>+82 231-8953-9583</td>
                        </tr>
                    </tbody>
                </table>
            </main>
@endsection