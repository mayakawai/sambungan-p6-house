<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pegawai</title>
</head>
<body>
    <h1>Form Data Pegawai</h1>
    <form action="/pegawai" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="birth_date" required><br><br>

        <label>Tanggal Harus Wisuda:</label><br>
        <input type="date" name="tgl_harus_wisuda" required><br><br>

        <label>Hobi:</label><br>
        <input type="text" name="hobbies"><br><br>

        <label>Semester Saat Ini:</label><br>
        <input type="number" name="current_semester" min="1" required><br><br>

        <label>Cita-cita:</label><br>
        <input type="text" name="future_goal" required><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
