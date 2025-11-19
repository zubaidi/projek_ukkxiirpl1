<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 40px;
            text-align: center;
        }

        .dashboard {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .konten {
            display: flex;
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            justify-content: center;
            flex-wrap: wrap;
        }

        .konten > div {
            background-color: #f1f1f1;
            margin: 10px;
            padding: 20px;
            font-size: 30px;
        }

        .tabel {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .dashboard h2 {
            color: #333;
        }

        .user-info {
            font-size: 18px;
            margin-top: 10px;
            color: #555;
        }

        .sign-out {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .sign-out:hover {
            background-color: #c0392b;
        }

        .footer {
            text-align: center;
            padding: 15px;
            background-color: #ecf0f1;
            color: #7f8c8d;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        .card-container {
            display: flex;
            gap: 20px;
            margin: 20px;
            justify-content: center;
            flex-wrap: wrap; /* agar responsif di layar kecil */
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 20px;
            width: 370px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Selamat Datang di Dashboard</h1>
    </div>
    <div class="dashboard">
        <h2>Informasi Pengguna</h2>
        <div class="user-info">
            Nama Pengguna: <strong> {{ $user['nama'] }} </strong>
        </div>
        <a href="" class="sign-out">Sign Out</a>
    </div>
    <div class="card-container">
        <div class="card">
            <h3>Tabel Data</h3>
            <p>Tabel Pelanggan</p>
            <a href="{{ route('products') }}">Lihat tabel</a>
        </div>
        <div class="card">
            <h3>Formulir Pendaftaran</h3>
            <p>Pendaftaran Akun User</p>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 Dashboard dibuat oleh <code>{{ $user['nama'] }}</code>. Hak cipta dilindungi.
    </div>
</body>
</html>
