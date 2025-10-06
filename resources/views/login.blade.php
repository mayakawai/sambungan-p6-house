<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
        }
        button {
            padding: 8px 12px;
            background: #007bff;
            border: none;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h2>Form Login</h2>

    {{-- Tampilkan pesan error --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Tampilkan pesan sukses --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    {{-- Form login --}}
    <form action="/auth" method="POST">
        @csrf
        <label>Username:</label>
        <input type="text" name="username" value="{{ old('username') }}">

        <label>Password:</label>
        <input type="password" name="password">

        <button type="submit">Login</button>
    </form>
</body>
</html>
