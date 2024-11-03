<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Guard</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="entry-flow/css/style.css">
    <link rel="stylesheet" href="entry-flow/css/modal.css">
</head>

<body>
    <div class="container">
        <img src="img/logo.png" alt="Flow Guard Logo" id="logo">
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
            <button id="enter" type="button" onclick="openModal()">Entrar</button>
        </form>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="principal">
                <img src="img/perfil_padrao.png" alt="Perfil" id="perfil">
                <div class="modal-header">
                    <p>Morador: Bruno José</p>
                    <p>Condomínio: XPTO</p>
                    <p>Residência: Apartamento 23A, Bloco C</p>
                </div>
            </div>
            
            <div class="modal-body">
                <h2>Passagem concedida!</h2>
                <p><strong>Informações da entrada</strong></p>
                <p>Data/Horário: 29/10/2024 às 22:39</p>
                <p>Veículo: Chevrolet Celta 2007 (Preto)</p>
                <p>Placa: XPE3T01 (Mercosul)</p>
            </div>
        </div>
    </div>

    <script src="entry-flow/js/plate-placeholder.js"></script>
    <script src="entry-flow/js/modal.js"></script>
</body>

</html>
