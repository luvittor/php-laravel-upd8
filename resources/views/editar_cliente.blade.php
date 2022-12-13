<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes UPD8</title>
</head>

<body>

    <form action="/atualizar-cliente/{{ $cliente->id }}" method="POST">
        @csrf
        @method("PUT")

        <label for="">CPF:</label>
        <input type="text" placeholder="000.000.000-00" name="cpf" value="{{ $cliente->cpf }}">

        <label for="">Nome:</label>
        <input type="text" name="nome" value="{{ $cliente->nome }}">

        <label for="">Data Nascimento:</label>
        <input type="text" name="data_nascimento" placeholder="1984-12-31" value="{{ $cliente->data_nascimento }}">

        <label for="">Sexo:</label>
        <select id="form_sexo" name="sexo">
            @if ($cliente->sexo == "M")
            <option value="M" selected>Masculino</option>
            @else
            <option value="M">Masculino</option>
            @endif
            @if ($cliente->sexo == "F")
            <option value="F" selected>Feminino</option>
            @else
            <option value="F">Feminino</option>
            @endif
        </select>

        <label for="">Endereço:</label>
        <input type="text" name="endereco" value="{{ $cliente->endereco }}">

        <label for="">Cidade:</label>
        <input type="text" name="cidade" value="{{ $cliente->cidade }}">

        <label for="">Estado:</label>
        <input type="text" name="estado" value="{{ $cliente->estado }}">

        <button>Salvar</button>
        <input type="reset" value="Limpar"></input>

    </form>

</body>

</html>