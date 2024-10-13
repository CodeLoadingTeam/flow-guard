<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="box">
            <p>Por favor, selecione tipo da sua placa:</p>
            <form action="{{ route('automobile.enter') }}" method="POST">
                <input type="radio" id="mercosul" name="plate" value="placa_mercosul">
                <label for="mercosul">Mercosul</label><br>

                <input type="radio" id="old" name="plate" value="placa_antiga">
                <label for="old">Placa Antiga</label><br><br>

                <input type="text" name="plate"><br><br>
                <input type="submit" value="Entrar">
            </form>        
        </div>
    </div>
</body>
</html>

{{-- CSS --}}
<style>
.container {
    width: 100vw;
    height: 100vh;
    background: #C0C0C0;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.box {
    width: 300px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

body {
    margin: 0px;
}

</style>