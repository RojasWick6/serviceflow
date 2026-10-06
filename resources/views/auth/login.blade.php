<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServiceFlow | Iniciar sesión</title>
    <style>
        * { box-sizing: border-box; font-family: Arial, sans-serif; }
        body { margin: 0; min-height: 100vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1e3a8a, #3b82f6); }
        .card { background: #fff; padding: 32px; border-radius: 12px; width: 100%; max-width: 380px; box-shadow: 0 10px 30px rgba(0,0,0,.25); margin: 16px; }
        h1 { margin: 0 0 4px; color: #1e3a8a; }
        p.sub { margin: 0 0 24px; color: #6b7280; }
        label { display: block; margin-bottom: 6px; font-size: 14px; color: #374151; }
        input[type=email], input[type=password] { width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 8px; margin-bottom: 16px; }
        button { width: 100%; padding: 12px; background: #1e3a8a; color: #fff; border: 0; border-radius: 8px; font-size: 16px; cursor: pointer; }
        button:hover { background: #1d4ed8; }
        .error { background: #fee2e2; color: #b91c1c; padding: 10px; border-radius: 8px; margin-bottom: 16px; font-size: 14px; }
        .remember { font-size: 14px; margin-bottom: 16px; color: #374151; }
    </style>
</head>
<body>
    <div class="card">
        <h1>ServiceFlow</h1>
        <p class="sub">Gestión de servicios y órdenes de trabajo</p>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <label for="email">Correo</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <div class="remember">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" style="display:inline">Recordarme</label>
            </div>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>