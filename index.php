<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Tênis Sneakers</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Loja de Tênis Sneakers</h1>
    </header>
    <main>
        <section id="search-box">
            <img src="img/tenissneaker.png" alt="Tênis Sneakers 001" id="search-image">
            <form action="tenis.php" method="POST">
                <h2>Encontre o tênis que deseja:</h2>
                <nav class="search-container">
                    <input type="text" name="cxtenis" placeholder="Digite o nome do tênis">
                    <button type="submit" name="cxtam">Pesquisar</button>
                </nav>
                <label for="shoe-size">Tamanho do Tênis:</label>
                <input type="number" name="size" id="shoe-size" min="35" max="45">
            </form>
        </section>
    </main>
    <footer class="footer">
    <section class="container">
        <nav class="row">
            <nav class="col-md-4">
                <h4>Localização</h4>
                <p>Rua dos Sneakers, 123</p>
                <p>Cidade dos Tênis</p>
                <p>CEP: 12345-678</p>
            </nav>
            <nav class="col-md-4">
                <h4>Contato</h4>
                <p>Telefone: (00) 1234-5678</p>
                <p>Email: info@sneakerstore.com</p>
            </nav>
            <nav class="col-md-4">
                <h4>Redes Sociais</h4>
                <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                </ul>
            </nav>
        </nav>
        <hr>
        <nav class="row">
            <article class="col-md-12 text-center">
                <p>&copy; 2024 Sneaker Store. Todos os direitos reservados.</p>
            </article>
        </nav>
    </section>
</footer>
</body>
</html>
