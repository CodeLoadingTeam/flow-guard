<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Guard</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="entry-flow/css/style.css">
    <link rel="stylesheet" href="entry-flow/css/modal.css">
    <link rel="stylesheet" href="entry-flow/css/error-modal.css">
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
                <input type="text" id="input_plate" name="plate" placeholder="XPE3T01">
            </div>
            <button id="enter" type="button" onclick="submitForm()">Entrar</button>
        </form>
    </div>
    
    <div class="modal" id="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-header">
                <img src="img/perfil_padrao.png" alt="Perfil" id="perfil">
                <div class="modal-info">
                    <p id="resident"></p>
                    <p id="condominium"></p>
                    <p id="domicile"></p>
                </div>
            </div>
            <div class="modal-body">
                <h2>Passagem concedida!</h2>
                <p><strong>Informações da entrada</strong></p>
                <p id="datetime"></p>
                <p id="automobile"></p>
                <p id="plate"></p>
            </div>
        </div>
    </div>

    <div class="error-modal" id=error_modal>
        <div class="error-modal-content">
            <span class="error-close" onclick="closeErrorModal()">&times;</span>
            <div class="error-modal-body">
                <h2>Falha no acesso!</h2>
                <p id="error_message"></p>
            </div>
        </div>
    </div>

    <script>
        const routeEnter = '{{ route('automobile.enter') }}';
        const csrfToken = '{{ csrf_token() }}';
    </script>
    <script src="entry-flow/js/modal.js"></script>
    <script src="entry-flow/js/plate-placeholder.js"></script>
</body>

</html>
