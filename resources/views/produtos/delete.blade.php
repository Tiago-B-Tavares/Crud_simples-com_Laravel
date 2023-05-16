<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um produto</title>
</head>

<body>
    <form action="{{ route('excluir_produto', ['id' => $produto->id])}}" method="post">
        @csrf
        <p>
            <label for="">Tem certeza que deseja excluir esse produto?</label>
        </p>
        <p>
            <input type="text" name="nome" value="{{$produto->nome}}">
        </p>
        <button>Sim</button>
    </form>

</body>

</html>