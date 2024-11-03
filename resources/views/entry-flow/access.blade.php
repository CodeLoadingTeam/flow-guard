<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Guard</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="entry-flow/css/style.css">
</head>

<body>
    <div class="container">
        <img src="img/logo.png" alt="Flow Guard Logo">
        <form id="plate_form">
            @csrf
            <p class="text-topic">Selecione o tipo da placa</p>
            <div class="radio-group">
                <label><input type="radio" id="mercosul_plate" name="plate_type" checked>Mercosul</label>
                <label><input type="radio" id="old_plate" name="plate_type">Antigo</label>
            </div>
            <p class="text-topic">Digite a placa</p>
            <div class="input-plate">
                <input type="text" id="plate" name="plate" placeholder="XPE3T01">
            </div>
            <button id="enter" type="submit">Entrar</button>
        </form>
    </div>

    <script src="entry-flow/js/plate-placeholder.js"></script>
</body>

</html>
