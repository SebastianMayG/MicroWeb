@extends ('layouts.admin')
@section ('contenido')
    <style>
    .calculator {
      max-width: 400px;
      margin: 20px auto;
    }

    .calculator table {
      width: 100%;
    }

    .calculator input[type="number"],
    .calculator select {
      width: calc(100% - 40px);
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .calculator button {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .calculator button:hover {
      background-color: #45a049;
    }

    #resultado {
      margin-top: 10px;
      text-align: center;
      font-weight: bold;
    }
    #resultados {
      display: block;
      text-align: center;
    }

    </style>    
      <div>
        <h1>Calculadora de precios</h1>
        <div class="calculator">
          <table>
            <tr>
              <td><label for="costo">Costo:</label></td>
              <td><input type="number" id="costo" placeholder="Costo"></td>
            </tr>
            <tr>
              <td><label for="margen">Margen (%):</label></td>
              <td><input type="number" id="margen" placeholder="Margen"></td>
            </tr>
            <tr>
              <td><label for="impuesto">Impuesto:</label></td>
              <td>
                <select id="impuesto">
                  <option value="iva">IVA (16%)</option>
                  <option value="isr">ISR (30%)</option>
                </select>
              </td>
            </tr>
          </table>
          <button onclick="calcularPrecio()">Calcular</button>
          <div id="resultado"></div>
          <div id="resultadoSinImpuesto"></div>
        </div>
      <script>
      function calcularPrecio() {
      var costo = parseFloat(document.getElementById('costo').value);
      var margen = parseFloat(document.getElementById('margen').value);
      var impuesto = document.getElementById('impuesto').value;

      if (isNaN(costo) || isNaN(margen)) {
        document.getElementById('resultado').innerHTML = "Por favor, ingrese valores válidos.";
        return;
      }

      var impuestoPorcentaje = 0;
      if (impuesto === 'iva') {
        impuestoPorcentaje = 16;
      } else if (impuesto === 'isr') {
        impuestoPorcentaje = 30;
      }

      var precioAntesImpuesto = costo + (costo * (margen / 100));
      var precioConImpuesto = precioAntesImpuesto + (precioAntesImpuesto * (impuestoPorcentaje / 100));
      var precioSinImpuesto = precioAntesImpuesto;

      document.getElementById('resultado').innerHTML = "Precio de Venta con " + impuesto.toUpperCase() + " (" + impuestoPorcentaje + "%): $" + precioConImpuesto.toFixed(2);
      document.getElementById('resultadoSinImpuesto').innerHTML = "Precio de Venta sin " + impuesto.toUpperCase() + ": $" + precioSinImpuesto.toFixed(2);
    }
  </script>

  </body>
</html>
@endsection