<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}">
    <title>Alterar</title>
</head>
<body>
    <div class="form-container">
        <h2>Altere seu cadastro</h2>
        <form>
            <div class="input-group">
                <label for="username">Código</label>
                <input type="text" id="username">
            </div>
            <div class="input-group">
                <label for="username">Nome</label>
                <input type="text" id="username">
            </div>
            <div class="input-group">
                <label for="email">Espécie</label>
                <input type="email" id="email">
            </div>
            <div class="input-group">
                <label for="password">Idade</label>
                <input type="password" id="password">
            </div>
            <div class="input-group"></div>
                <label for="password">Nome do tutor</label>
                <input type="password" id="password">
                <br><br>
                <button type="submit">Alterar</button>
            </div>
        </form>
    </div>
</body>
</html>