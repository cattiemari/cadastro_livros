<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Livro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-custom {
            background-color: #add8e6; /* Azul Claro */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #fff;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #f8f9fa; /* Cor de fundo leve */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            margin-bottom: 20px;
            color: #343a40; /* Cor do texto */
        }
        .btn-primary {
            background-color: #add8e6; /* Azul Claro */
            border-color: #add8e6;
        }
        .btn-primary:hover {
            background-color: #9fc5e8; /* Azul Claro mais escuro para hover */
            border-color: #9fc5e8;
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
        <div class="form-container">
            <h1>Cadastrar Novo Livro</h1>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf <!-- Inclua a diretiva CSRF -->
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" id="autor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ano_publicacao">Ano de Publicação:</label>
                    <input type="number" name="ano_publicacao" id="ano_publicacao" class="form-control">
                </div>
                <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <input type="text" name="genero" id="genero" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
