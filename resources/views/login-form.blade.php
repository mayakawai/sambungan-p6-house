<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>Form Login</h2>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <p style="color: green;">{!! session('success') !!}</p>
    @endif

    {{-- Pesan error umum --}}
    @if($errors->has('gagal_logika'))
        <p style="color: red;">{{ $errors->first('gagal_logika') }}</p>
    @endif

    {{-- Pesan validasi --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="{{ old('username') }}"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
