<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-custom {
            background-color: #add8e6; /* Azul Claro */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.create') }}">Cadastro de Livros</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Bem-vindo à Biblioteca</h1>
        <p>Use o menu acima para navegar.</p>
    </div>
</body>
</html>
