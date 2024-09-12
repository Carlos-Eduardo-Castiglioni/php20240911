<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <form action="/criar_produto" method= "post">
    @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao">

        <label for="preco">Preço</label>
        <input type="number" name="preco">

        <input type="submit" value="Salvar">

    </form>
    
</body>
</html>