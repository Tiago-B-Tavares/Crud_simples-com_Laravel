<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro de Produtos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
</head>
<body>
    <form action="{{ route('registrar_produto')}}" method="POST">
    @csrf
        <label for="">nome:</label> <br/>
        <input type="text" name="nome"> <br/>
        <label for="">custo:</label> <br/>
        <input type="text" name="custo"> <br/>
        <label for="">preço:</label> <br/>
        <input type="text" name="preco"> <br/>
        <label for="">quantidade:</label> <br/>
        <input type="text" name="quantidade"> <br/>
        <button>salvar</button>
    </form>
</body>
</html>