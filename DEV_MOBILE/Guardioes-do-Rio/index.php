<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardiões do Rio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #4CAF50, #2E7D32);
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 10%;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }
        .btn-custom {
            background-color: #4CAF50;
            border: none;
        }
        .btn-custom:hover {
            background-color: #388E3C;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-4">Bem-vindo ao Guardiões do Rio</h1>
        <div class="row justify-content-center">
            <!-- Link para Registro -->
            <div class="col-md-3">
                <div class="card p-3">
                    <h5 class="card-title">Novo aqui?</h5>
                    <p class="card-text">Crie sua conta e comece sua jornada!</p>
                    <a href="src/views/register.php" class="btn btn-custom btn-block">Registrar</a>
                </div>
            </div>
            <!-- Link para Login -->
            <div class="col-md-3">
                <div class="card p-3">
                    <h5 class="card-title">Já possui uma conta?</h5>
                    <p class="card-text">Faça login para acessar seu álbum.</p>
                    <a href="src/views/login.php" class="btn btn-custom btn-block">Login</a>
                </div>
            </div>
            <!-- Link para Álbum -->
            <div class="col-md-3">
                <div class="card p-3">
                    <h5 class="card-title">Seu Álbum</h5>
                    <p class="card-text">Visualize suas figurinhas resgatadas.</p>
                    <a href="src/views/album.php" class="btn btn-custom btn-block">Ver Álbum</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
