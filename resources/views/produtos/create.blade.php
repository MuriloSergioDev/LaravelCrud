<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('registrar_produto')}}" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome">
        <label for="">Custo</label>
        <input type="text" name="custo">
        <label for="">Pre�o</label>
        <input type="text" name="preco">
        <label for="">Quantidade</label>
        <input type="text" name="quantidade">
        <button>Salvar</button>
    </form>

</body>

</html>
