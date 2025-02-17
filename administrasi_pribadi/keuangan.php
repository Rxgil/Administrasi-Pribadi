<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Keuangan</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #121212;
        color: white;
    }

    .container {
        width: 90%;
        max-width: 1000px;
        margin: auto;
        padding: 20px;
        background: #1e1e1e;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
    }

    .nav {
        display: flex;
        justify-content: space-around;
        padding: 15px;
        background: #007bff;
        border-bottom: 2px solid white;
    }

    .nav button {
        background: none;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        padding: 10px;
    }

    .nav button:hover {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 5px;
    }

    h1,
    h2 {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: #1e1e1e;
        border-radius: 8px;
        overflow: hidden;
    }

    th,
    td {
        border: 1px solid #444;
        padding: 10px;
        text-align: left;
    }

    th {
        background: #007bff;
        color: white;
    }

    td {
        background: #2a2a2a;
    }

    button {
        background: #007bff;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 15px;
        display: block;
        width: 100%;
    }

    button:hover {
        background: #0056b3;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="nav">
        <button onclick="window.location.href='dashboard.php'">Dashboard</button>
        <button onclick="window.location.href='keuangan.php'">Keuangan</button>
        <button onclick="window.location.href='daily_routine.php'">Daily Routine</button>
    </div>

    <!-- Tabel Keuangan -->
    <div class="container">
        <h2>Catatan Keuangan</h2>
        <table>
            <tr>
                <th>Jenis</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
            </tr>
            <tr>
                <td>Pemasukan</td>
                <td>Gaji</td>
                <td>Rp5.000.000</td>
                <td>Gaji bulan Februari</td>
                <td>2025-02-06</td>
            </tr>
            <tr>
                <td>Pengeluaran</td>
                <td>Makan</td>
                <td>Rp150.000</td>
                <td>Makan di restoran</td>
                <td>2025-02-07</td>
            </tr>
        </table>
        <button>Tambah Transaksi</button>
    </div>

</body>

</html>