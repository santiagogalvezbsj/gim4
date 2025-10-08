<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         button {
  background-color: #c4c2c2; 
  color: rgb(0, 0, 0);              
  border: none;
  padding: 10px 20px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
}
    </style>
    <title>Stock Disponible</title>
    <script>
        function modificarStock() {
            // Obtener todos los spans de stock y reemplazarlos por inputs
            var elementos = document.getElementsByClassName("stock");
            for (var i = 0; i < elementos.length; i++) {
                var valor = elementos[i].innerText;
                elementos[i].innerHTML = "<input type='number' value='" + valor + "'>";
            }

            // Cambiar el botón para guardar
            document.getElementById("boton").innerHTML = 
                "<button onclick='guardarStock()'>Guardar Stock</button>";
        }

        function guardarStock() {
            var elementos = document.getElementsByClassName("stock");
            var total = 0;

            for (var i = 0; i < elementos.length; i++) {
                var input = elementos[i].getElementsByTagName("input")[0];
                var nuevoValor = input.value;
                elementos[i].innerText = nuevoValor; // Mostrar el nuevo stock
                total += parseInt(nuevoValor);
            }

            // Actualizar total de stock
            document.getElementById("total").innerText = total + " productos.";

            // Restaurar el botón
            document.getElementById("boton").innerHTML = 
                "<button onclick='modificarStock()'>Modificar Stock</button>";
        }
    </script>
</head>
<body>
    <font face="Arial">
        <h1>Stock disponible.</h1>

        <table width="100%">
            <tr>
                <td valign="top">
                    <ul>
                    <p>Proteína Whey, Q. 500.00: <span class="stock">20</span> disponibles.</p>
                    <p>Proteína ISO, Q. 750.00: <span class="stock">20</span> disponibles.</p>
                    <p>Creatina Monohidratada, Q. 300.00: <span class="stock">20</span> disponibles.</p>
                    <p>Preentreno PSYCOTHIC, Q. 520.00: <span class="stock">20</span> disponibles.</p>
                    <p>Camisa con LOGO, Q. 100.00: <span class="stock">20</span> disponibles.</p>
                    <p>Pachón con LOGO, Q. 60.00: <span class="stock">20</span> disponibles.</p>
                    </ul>
                </td>
                <td valign="top">
                    <p>Total de stock disponible: <span id="total">120 productos.</span></p>
                    <div id="boton">
                        <button onclick="modificarStock()">Modificar Stock</button>
                    </div>
                </td>
            </tr>
        </table>
    </font>
</body>
</html>