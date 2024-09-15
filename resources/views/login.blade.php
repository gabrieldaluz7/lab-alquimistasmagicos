<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        @if ($errors->any())
            <div class="error-message">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif
    </div>
</body>
</html>
