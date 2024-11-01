<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reconhecimento de Placas</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/access/styles.css">
</head>

<body>
    <!-- Sessão 1  -->
    <section id="section1" class="visible">
        <div class="container">
            <div class="logo">LOGO</div>
            <div class="box">
                <h3 id="tipo_placa">Selecione o tipo da placa:</h3>
                <!-- <form action="{{ route('automobile.enter') }}" method="POST"> -->
                <div>
                    <input type="radio"id="mercosul" name="plate" value="placa_mercosul">
                    <label for="mercosul">Mercosul</label><br>
                </div>
                <div class="rd_placa_antiga">
                    <input type="radio" id="old" name="plate" value="placa_antiga">
                    <label for="old">Placa antiga.</label>
                </div>

                <h3>Insira a Placa:</h3>

                <input type="text" name="plate"><br><br>
                <button id="entrarButton">Entrar</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section id="section2" class="hidden">
        <!-- <div class="container">
            <div class="header">
                <h3>Section 2</h3> -->
        </div>
        <div class="content">
            <div class="logo">LOGO</div>
            <div class="user-info">
                <img src="img/user_icon.png" alt="Ícone de Usuário" class="user-icon">
                <div class="user-details">
                    <p><strong>Características do morador:</strong></p>
                    <p>Nome: André Caismiro </p>
                    <p>APTO: 03</p>
                    <p>Bloco: 2 </p>
                </div>
            </div>
            <div class="car-info">
                <p><strong>Características do carro:</strong></p>
                <p>Marca: Ford </p>
                <p>Modelo: Escort</p>
                <p>Placa: CHS6D83 - Mercosul</p>
                <p>Data/Horário: 17/10/2024 - 22:15 </p>
            </div>
        </div>
        </div>
    </section>

    <!-- <script src="resoucers/js/access/script.js"></script> -->

    <script src="js/access/script.js"></script>
</body>

</html>
