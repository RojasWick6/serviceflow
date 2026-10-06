<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServiceFlow | Dashboard</title>
    <style>
        * { box-sizing: border-box; font-family: Arial, sans-serif; }
        body { margin: 0; background: #f3f4f6; }
        header { background: #1e3a8a; color: #fff; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px; }
        main { padding: 24px; }
        .badge { background: #3b82f6; padding: 4px 10px; border-radius: 999px; font-size: 13px; }
        .box { background: #fff; padding: 24px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,.08); }
        button { background: #ef4444; color: #fff; border: 0; padding: 8px 16px; border-radius: 8px; cursor: pointer; }
    </style>
</head>
<body>
    <header>
        <strong>ServiceFlow</strong>
        <div>
            {{ auth()->user()->name }}
            <span class="badge">{{ auth()->user()->getRoleNames()->first() }}</span>
            <form method="POST" action="/logout" style="display:inline; margin-left:12px;">
                @csrf
                <button type="submit">Salir</button>
            </form>
        </div>
    </header>
    <main>
        <div class="box">
            <h2>¡Bienvenido, {{ auth()->user()->name }}!</h2>
            <p>Tu rol es: <strong>{{ auth()->user()->getRoleNames()->first() }}</strong></p>

            @role('admin')
                <p>🔑 Como administrador puedes gestionar todo el sistema.</p>
            @endrole
            @role('supervisor')
                <p>📋 Como supervisor puedes gestionar clientes y órdenes.</p>
            @endrole
            @role('tecnico')
                <p>🔧 Como técnico verás solo las órdenes que te asignen.</p>
            @endrole
        </div>
    </main>
</body>
</html>