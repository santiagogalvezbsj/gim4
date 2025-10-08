<?php
<!-- filepath: c:\xampp\htdocs\gim4\app\Views\menuAgregarCliente.php -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
  <title>Agregar cliente</title>
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
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 30px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Agregar cliente</h1>

  <?php 
  if(isset($_GET['status']) && $_GET['status'] == 'ok') {
      echo "<p style='color: green;'>Cliente agregado correctamente ✅</p>";
  }
  ?>

  <form action="../controladores/guardar_cliente.php" method="POST">
    Nombres: <input type="text" name="nombre" required><br><br>
    Apellidos: <input type="text" name="apellido" required><br><br>
    Edad: <input type="number" name="edad" required><br><br>
    Teléfono: <input type="text" name="telefono" required><br><br>
    Plan: 
    <select name="plan">
      <option value="Mensual">Mensual</option>
      <option value="Anual">Anual</option>
      <option value="UniFit Mensual">UniFit Mensual</option>
      <option value="UniFit Anual">UniFit Anual</option>
    </select><br><br>

    <button type="submit">Agregar Cliente</button>
  </form>

  <h2>Lista de clientes</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Edad</th>
      <th>Teléfono</th>
      <th>Plan</th>
    </tr>
    <?php if (isset($clientes) && count($clientes) > 0): ?>
      <?php foreach ($clientes as $cliente): ?>
        <tr>
          <td><?= esc($cliente['id']) ?></td>
          <td><?= esc($cliente['nombre']) ?></td>
          <td><?= esc($cliente['apellido']) ?></td>
          <td><?= esc($cliente['edad']) ?></td>
          <td><?= esc($cliente['telefono']) ?></td>
          <td><?= esc($cliente['plan']) ?></td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="6">No hay clientes registrados.</td>
      </tr>
    <?php endif; ?>
  </table>
</body>
</html>
