<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <form action="/registrar-produto" method="POST">
        @csrf  <!-- token de segurança do proprio laravel para pessoas não burlar o sistema -->
        <label>Nome Produto:</label>
        <input type="text" name="nome"><br><br>
        <label>Valor do Produto:</label>
        <input type="text" name="valor"><br><br>
        <label>Quantidade em Estoque:</label>
        <input type="text" name="estoque"><br><br>
        <button>Registrar Produto</button>
    </form>
</body>
</html>