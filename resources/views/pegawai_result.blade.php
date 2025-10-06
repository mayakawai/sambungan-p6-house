<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data Pegawai</title>
</head>
<body>
    <h1>Hasil Data Pegawai</h1>
    <p><strong>Nama:</strong> {{ $name }}</p>
    <p><strong>Umur:</strong> {{ $my_age }} tahun</p>
    <p><strong>Hobi:</strong></p>
    <ul>
        @foreach($hobbies as $hobi)
            <li>{{ trim($hobi) }}</li>
        @endforeach
    </ul>
    <p><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</p>
    <p><strong>Jarak Hari Menuju Wisuda:</strong> {{ $time_to_study_left }} hari</p>
    <p><strong>Semester Saat Ini:</strong> {{ $current_semester }}</p>
    <p><strong>Info:</strong> {{ $info }}</p>
    <p><strong>Cita-cita:</strong> {{ $future_goal }}</p>

    <a href="/pegawai">← Kembali ke Form</a>
</body>
</html>
