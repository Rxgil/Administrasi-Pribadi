<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
        box-shadow: 0px 0px 10px rgba(0, 255, 255, 0.5);
    }

    .nav {
        display: flex;
        justify-content: space-around;
        padding: 10px;
        background: #007bff;
        border-bottom: 2px solid cyan;
    }

    .nav button {
        background: none;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .nav button:hover {
        text-decoration: underline;
    }

    .section {
        display: none;
        padding: 20px;
    }

    .active {
        display: block;
    }

    .summary {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .card {
        width: 48%;
        padding: 20px;
        background: #2c2c2c;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 255, 255, 0.5);
        text-align: center;
    }

    .card h2 {
        color: cyan;
    }

    .progress-container {
        position: relative;
        width: 100px;
        height: 100px;
        margin: 10px auto;
    }

    .progress-svg {
        transform: rotate(-90deg);
    }

    .progress-circle {
        fill: none;
        stroke: rgba(0, 255, 255, 0.2);
        stroke-width: 10;
    }

    .progress-bar {
        fill: none;
        stroke: cyan;
        stroke-width: 10;
        stroke-linecap: round;
        transition: stroke-dasharray 1s ease-in-out;
    }

    .progress-text {
        font-size: 18px;
        font-weight: bold;
        fill: white;
    }

    p {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="nav">
        <h4>Administrasi Pribadi</h4>
        <button onclick="showSection('dashboard')">Dashboard</button>
        <button onclick="location.href='keuangan.php'">Keuangan</button>
        <button onclick="location.href='daily_routine.php'">Daily Routine</button>
    </div>

    <!-- Dashboard -->
    <div class="container">
        <div id="dashboard" class="section active">
            <h1>Dashboard</h1>
            <p>Ringkasan keuangan dan rutinitas harian.</p>
            <div class="summary">
                <div class="card">
                    <h2>Keuangan</h2>
                    <p>Total saldo: Rp 10.000.000</p>
                    <p>Pemasukan: Rp 5.000.000</p>
                    <p>Pengeluaran: Rp 2.500.000</p>
                </div>

                <div class="card">
                    <h2>Daily Routine</h2>
                    <p>Rutinitas yang diselesaikan: 5/7</p>
                    <p>Target Harian: 7 Kegiatan</p>

                    <!-- Progress Circle -->
                    <div class="progress-container">
                        <svg class="progress-svg" width="100" height="100" viewBox="0 0 100 100">
                            <circle class="progress-circle" cx="50" cy="50" r="40"></circle>
                            <circle class="progress-bar" cx="50" cy="50" r="40" stroke-dasharray="0, 251.2"></circle>
                            <text class="progress-text" x="50" y="55" text-anchor="middle">0%</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function showSection(id) {
        document.querySelectorAll('.section').forEach(section => section.classList.remove('active'));
        document.getElementById(id).classList.add('active');
    }

    // Menghitung persentase daily routine
    function updateProgress(complete, total) {
        let percentage = Math.round((complete / total) * 100);
        let circle = document.querySelector('.progress-bar');
        let text = document.querySelector('.progress-text');
        let circumference = 2 * Math.PI * 40;
        let dashOffset = circumference - (percentage / 100 * circumference);

        circle.style.strokeDasharray = `${circumference - dashOffset}, ${circumference}`;
        text.textContent = `${percentage}%`;
    }

    // Jalankan progress
    updateProgress(5, 7);
    </script>

    <p>© 2024 Administrasi Pribadi</p>

</body>

</html>