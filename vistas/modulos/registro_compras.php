<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <div class="form-group">
            <h2>Compras gasolina</h2>
            <label for="text">Seleccionar gasolina :</label>
            <select>
                <option>G90</option>
                <option>G84</option>
                <option>G85</option>
                <option>Disel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="text">Galones a añadir:</label>
            <input type="int" class="form-control" id="galone">
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
        <a href="menu.html"><input type="button" value="regresar"></a>
    </form>
</body>
</html>