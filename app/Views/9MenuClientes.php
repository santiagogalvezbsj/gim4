<!DOCTYPE html>
<html lang="en">


 <head>
  <font face="Arial">
    
   <title>Clientes UniFit</title>
    <meta charset="UTF-8">
   <style>
   

     button {
  background-color: #c4c2c2; 
  color: rgb(0, 0, 0);              
  border: none;
  padding: 10px 20px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
  align-items: center;
}

    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 5px;
    }
 </style>
  

</head>
<body>
  <h1>Clientes UniFit</h1>
  <table id="clientesTabla">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Edad</th>
      <th>Número de teléfono</th>
      <th>Plan</th>
      <th>Acciones</th>
    </tr>
  </table>

  <br>
  <button><a href="/clientes">Clientes</a></button>
  <form action="/guardarCliente" method="post">
  <input type="text" name="nombre" placeholder="Nombre">
  <button type="submit">Guardar</button>
</form>

  <script>
    
    document.addEventListener("DOMContentLoaded", () => {
      const clientes = JSON.parse(localStorage.getItem("clientes")) || [];
      const tabla = document.getElementById("clientesTabla");

      clientes.forEach(c => {
        const fila = tabla.insertRow();
        fila.insertCell(0).innerText = c.id;
        fila.insertCell(1).innerText = c.nombre;
        fila.insertCell(2).innerText = c.apellido;
        fila.insertCell(3).innerText = c.edad;
        fila.insertCell(4).innerText = c.telefono;
        fila.insertCell(5).innerText = c.plan;
        const accionesCell = fila.insertCell(6);
        accionesCell.appendChild(crearBoton("Eliminar", `/eliminarCliente/${c.id}`));
        accionesCell.appendChild(crearBoton("Editar", `/localizarCliente/${c.id}`));
      });
    });

    function crearBoton(texto, enlace) {
      const boton = document.createElement("a");
      boton.innerText = texto;
      boton.href = enlace;
      boton.style.marginRight = "10px";
      return boton;
    }
  </script>
  </font>
</body>
</html>