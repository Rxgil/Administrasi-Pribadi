<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Routine</title>

    <!-- FullCalendar CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

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

    #calendar {
        max-width: 900px;
        margin: 20px auto;
        padding: 10px;
        background: #222;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
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

    <!-- Kalender -->
    <h1>Jadwal Kegiatan</h1>
    <div id="calendar"></div>

    <!-- Tabel Kegiatan -->
    <div class="container">
        <h2>Daily Routine</h2>
        <table>
            <tr>
                <th>Kegiatan</th>
                <th>Waktu</th>
                <th>Tanggal</th>
            </tr>
            <tr>
                <td>Lari Pagi</td>
                <td>06:00</td>
                <td>2025-02-14</td>
            </tr>
            <tr>
                <td>Workout</td>
                <td>20:00</td>
                <td>2025-02-15</td>
            </tr>
            <tr>
                <td>Makan Sehat</td>
                <td>All Time</td>
                <td>2025-02-17</td>
            </tr>
        </table>
        <button>Tambah Kegiatan</button>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log("FullCalendar script berjalan.");

        var calendarEl = document.getElementById('calendar');

        if (!calendarEl) {
            console.error("Elemen #calendar tidak ditemukan!");
            return;
        }

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [{
                    title: 'Lari Pagi',
                    start: '2025-02-14'
                },
                {
                    title: 'Workout',
                    start: '2025-02-15',
                    end: '2025-02-16'
                },
                {
                    title: 'Makan Sehat',
                    start: '2025-02-17'
                }
            ]
        });

        calendar.render();
        console.log("Kalender berhasil dirender.");
    });
    </script>

</body>

</html>