<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="box">
            <form action="{{ route('automobile.enter') }}" method="POST">
                @csrf
                <p>Selecione o tipo da placa</p>

                <input type="radio" id="mercosul" name="plate_type" value="placa_mercosul" style="margin-right: 2px;">
                <label for="mercosul" style="margin-right: 25px;">Mercosul</label>

                <input type="radio" id="old" name="plate_type" value="placa_antiga" style="margin-right: 2px;">
                <label for="old" style="margin-right: 25px;">Antigo</label><br><br>

                <input type="text" name="plate"><br><br>

                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>

<style>
body {
    margin: 0px;
}
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
    width: 500px;
    height: 600px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
