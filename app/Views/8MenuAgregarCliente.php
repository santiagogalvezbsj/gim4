<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
  <title>Agregar cliente</title>
  <font face="Arial">
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
</head>
<body>
  <h1>Agregar cliente</h1>

  <form id="formCliente">
    Nombres: <input type="text" id="nombre" required><br><br>
    Apellidos: <input type="text" id="apellido" required><br><br>
    Edad: <input type="number" id="edad" required><br><br>
    Teléfono: <input type="text" id="telefono" required><br><br>
    Plan: 
    <select id="plan">
      <option value="Mensual">Mensual</option>
      <option value="Anual">Anual</option>
      <option value="UniFit Mensual">UniFit Mensual</option>
      <option value="UniFit Anual">UniFit Anual</option>
    </select><br><br>

    <button type="submit" class="btn">Agregar Cliente</button>
  </form>

  <script>
    document.getElementById("formCliente").addEventListener("submit", function(e) {
      e.preventDefault();

      const cliente = {
        nombre: document.getElementById("nombre").value,
        apellido: document.getElementById("apellido").value,
        edad: document.getElementById("edad").value,
        telefono: document.getElementById("telefono").value,
        plan: document.getElementById("plan").value
      };

     
      const clientes = JSON.parse(localStorage.getItem("clientes")) || [];
      clientes.push(cliente);
      localStorage.setItem("clientes", JSON.stringify(clientes));

      alert("Cliente agregado exitosamente");
      window.location.href = "./menuClientes.html";
    });
  </script>
  </font>
</body>
</html>