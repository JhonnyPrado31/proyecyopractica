

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <H3>DATOS DEL DIA ANTERIOR</H3>
    <FORM>
        <select>
            <option>Surtidor 1</option>
            <option>Surtidor 2</option>
            <option>Surtidor 3</option>
            <option>Surtidor 4</option> <br>
            <input type="button" value="cargar Datos">
          </select>
    </FORM>
    <br>
    
    
    <table class="table table-striped" border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>TIPO</th>
                <th>LADO 1</th>
                <th>LADO 2</th>
                <th>Stock</th>
                <th>Precio U.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>G90</td>
                <td>9999</td>
                <td>9999</td>
                <td>1000</td>
                <td>15.40</td>
            </tr>
            <tr>
                <td>G85</td>
                <td>9999</td>
                <td>9999</td>
                <td>1000</td>
                <td>15.40</td>
            </tr>
            <tr>
                <td>G84</td>
                <td>9999</td>
                <td>9999</td>
                <td>1000</td>
                <td>15.40</td>
            </tr>
            
        </tbody>
    </table>
    <br><br>
    <form>
      <table>   
          <tbody>
            <tr>
                <td></td>
                <th>LADO 1</th>
                <th>LADO 2</th>
              
              </tr>
              <tr>
                <th>G84</th>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
              </tr>
              <tr>
                <th>G95</th>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
              </tr>
              <tr>
                <th>D85</th>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
              </tr>
              <tr>
                <th>G90</th>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
                <td><input type="t  ext" class="form-control" id="pwd"></td>
              </tr>

    </tbody>
      </table>
      <div class="form-group">
        <label for="pwd">CLIENTE :</label>
        <select>
            <option>Vale corviso</option>
            <option>b</option>
            <option>c</option>
            <option>D</option>
        </select>
        <label for="pwd">Monto :</label>
            <input type="text" class="form-control" id="pwd">
        <button>añadir</button>
    </div>
    <table class="table table-striped" border="1" cellspacing="0" cellpadding="10">
        <br>
        <tr>
            <th>Clientes</th>
            <th>Monto</th>
        </tr>
        <tr>
            <th>Vale Corviso</th>
            <th>222.00  </th>
        </tr>
        <br>
    </table>
    <div class="form-group">
        <label for="pwd">trabajador asignado :</label>
        <select>
            <option>ABDIAS</option>
            <option>b</option>
            <option>c</option>
            <option>D</option>
        </select>
    </div>

    <label for="pwd">Entrega Final:</label>
    <input type="text" class="form-control" id="pwd">
    <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="menu.html"><input type="button" value="regresar"></a>
    </form>
</body>
</html>