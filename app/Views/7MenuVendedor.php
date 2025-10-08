<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Menú UniFit</title>
  <style>
    button {
  background-color: #c4c2c2; 
  color: rgb(0, 0, 0);              
  border: none;
  padding: 10px 20px;
  border-radius: 12px;
  cursor: pointer;
  font-weight: bold;
}
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

   button {

display: block;
margin: 10px 0;

   }
    .menu {
      background:  rgb(228, 226, 226);
      padding: 20px;
      border-radius: 8px;
      width: 150px;
      margin-top: 150px;
    }

   
    .notificaciones {
      background:  rgb(228, 226, 226);
      padding: 20px;
      border-radius: 12px;
      width: 200px;
      margin-top: 150px;
    }

    
    .menu h3,
    .notificaciones h3 {
      margin-top: 0;
    }

   
    .notificacion {
      height: 15px;
      margin: 8px 0;
    }

    .bienvenida {
      position: absolute;
      top: 35px;
      left: 110px;
      font-size: 25px;
    }

    
    .instruccion {
      text-align: center;
      flex: 1;
      margin-top: 70px;
      font-size: 30px;
    }


  </style>
</head>
<body>

  <img src="img/img/logo.png" width="85px" height="85 px" style="position:absolute"; top:10px left:10px> 
  <div class="bienvenida">
    <strong>UniFit</strong><br>
    Bienvenido/a vendedor.
  </div>

  <div class="menu">
   
    <button><a href='9MenuClientes.html'>Clientes</a></button>
    <button><a href="ZmenuProductos(inactivo).html">Productos</a></button>
  </div>


  <div class="instruccion">
    Seleccione una opción de la izquierda. 
  </div>

  
  <div class="notificaciones">
    <h3>Notificaciones</h3>
  
  </div>
</body>
</html>