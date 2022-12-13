<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes UPD8</title>
</head>

<body>

    <form action="/novo-cliente" method="POST">
        @csrf

        <label for="">CPF:</label>
        <input type="text" placeholder="000.000.000-00" name="cpf">

        <label for="">Nome:</label>
        <input type="text" name="nome">

        <label for="">Data Nascimento:</label>
        <input type="text" name="data_nascimento" placeholder="1984-12-31">

        <label for="">Sexo:</label>
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>

        <label for="">Endereço:</label>
        <input type="text" name="endereco">

        <label for="">Cidade:</label>
        <input type="text" name="cidade">

        <label for="">Estado:</label>
        <input type="text" name="estado">

        <button>Salvar</button>
        <input type="reset" value="Limpar"></input>

    </form>

</body>

</html>