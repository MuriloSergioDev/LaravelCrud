<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <label for="">Nome</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <label for="">Custo</label>
    <input type="text" name="custo" value="{{ $produto->custo }}">
    <label for="">Preço</label>
    <input type="text" name="preco" value="{{ $produto->preco }}">
    <label for="">Quantidade</label>
    <input type="text" name="quantidade" value="{{ $produto->quantidade }}">
</body>

</html>
