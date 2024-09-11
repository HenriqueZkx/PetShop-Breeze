<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>PetShop</title>
</head>
<body>
    <header>
        <nav>
            <a class="logo">PetShop</a>
            <ul class="nav-list">
                <li><a href="/cadastrar">Cadastrar</a></li>
                <li><a href="/pesquisar">Pesquisar</a></li>
                <li><a href="/excluir">Excluir</a></li>
                <li><a>Listar</a></li>
                <li><a href="/alterar">Alterar</a></li>
            </ul>
        </nav>
    </header><br><br>

    <div id="body">
    <div class="contact-info">
        <div class="info-item">
            <div class="icon">&#128337;</div>
            <h3>Horário de Funcionamento</h3>
            <p>Sex a Sex, 13h ás 18h15</p>
        </div>
        <div class="info-item">
            <div class="icon">&#128222;</div>
            <h3>Ligue agora</h3>
            <p>(11)2045-4000</p>
        </div>
        <div class="info-item">
            <div class="icon">&#128205;</div>
            <h3>Endereço</h3>
            <p>Av. Aguia de Haia, 2633</p>
            <p>Cidade Antonio Estevão de Carvalho</p>
            <p>São Paulo - SP - CEP</p>
            <p>03694-000</p>
        </div>
    </div>
    </div>

    <br><br>

    <div class="promo-container">
        <div class="image-container">
            <img src="{{asset('image/cachorro.png')}}" alt="Fachada">
        </div>
        <div class="content-container">
            <h1>Saúde e bem-estar para o seu pet e para o bolso.</h1>
            <p>Aproveite! Banhos a partir de R$ 9,90 e muitos outros descontos em consultas veterinárias, medicamentos, ração e mais de 300 produtos para seu pet.</p>
            <a href="#" class="cta-button">Saiba mais</a>
        </div>
    </div>
</body>
</html>