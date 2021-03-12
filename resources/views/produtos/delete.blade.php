<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('excluir_produto', ['id'=> $produto->id]) }}" method="post">
        @csrf
        <label for="">Tem certeza que deseja excluir esse produto?</label>
        <input type="text" name="nome" value="{{ $produto->nome }}">
        <button>Sim</button>
    </form>

</body>
</html>
