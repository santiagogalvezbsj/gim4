<!DOCTYPE php_check_syntax>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes Unifit</title>
 
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bungee&family=Story+Script&am… rel="stylesheet">
    <style>
      
   
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #fbfbfb;
    }
 
    
    header {
      background-color: rgb(228, 226, 226);
      color: rgb(0, 0, 0);
      padding: 30px 600px;
      font-size: 30px;
      text-align: Center;
      font-family: 'Bungee', sans-serif;
    }
 
    .container {
      padding: 20px;
    }
 
    h1 {
      margin-bottom: 10px;
      font-family: 'Bungee', sans-serif;
    }
 
    .menu {
      text-align: right;
      margin-bottom: 20px;
    }
 
    
    .planes {
      display: flex;
      justify-content: space-around;
      gap: 0px;
      flex-wrap: wrap;
    }
 
 
    
    .card {
      background-color: rgb(228, 226, 226);
      padding: 50px;
      width: 250px;
      height: 450px;
      text-align: center;
      border-radius: 25px;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    }
 
 
   
 
    
    .card button {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #bebcbc;
      color: rgb(0, 0, 0);
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 8px;
    }
   
   
    .card button:hover {
      background-color: #a5a5a5;
    }
 
 
    .planes h2 {
     margin-top: -5px;
     margin-bottom: 50px;
    }
 
   
    .planes ul li {
     margin-top: 10px;
     text-align: left;
     margin: 10px 0 0 -10px;
    }
 
    .planes h2 {
      font-family: "Archivo Black", sans-serif;
      padding: 0px 70px;
      text-align: center;
    }
 
 
   .planes .btn-mensual {
     width: 120px;
     height: 40px;
     background-color: #b7b7b7;
     font-size: 14px;
     margin-top: 60px;
     font-family: "Archivo Black", sans-serif;
     color: rgb(88, 86, 86);
     margin: 130px 0 20px -40px;
    }
 
 
    .planes .btn-anual {
     width: 120px;
     height: 40px;
     background-color: #b7b7b7;
     font-size: 14px;
     margin-top: 60px;
     font-family: "Archivo Black", sans-serif;
     color: rgb(88, 86, 86);
     margin: 102px 0 20px -40px;
    }
 
 
   .planes .btn-unifit {
     width: 120px;
     height: 40px;
     background-color: #b7b7b7;
     font-size: 14px;
     margin-top: 60px;
     font-family: "Archivo Black", sans-serif;
     color: rgb(88, 86, 86);
     margin: 25px 0 20px -40px;
   }
 
 
   .planes h3 {
    font-size: 14px;
    margin: -50px 0 65px -40px;
   }
 
   .planes h4 {
    font-size: 14px;
    margin: -50px 0 0 -40px;
   }
 
   .planes h5 {
    font-size: 14px;
    margin: 0px 0 48px -40px;
   }
 
 
  </style>
</head>
<body>
 
  <header>
    Menú de planes
  </header>
 
  <div class="container">
   
 
 
    </div>
 
    <div class="planes">
      
      <div class="card">
 
        <h2 class="Mensual"> Mensual</h2>
 
      <ul>
 
        <h3>Q. 200.00</h3>
 
        <li>Horario de 4am a 11pm</li>
        <li>Acceso a nuestras dos sedes</li>
        <li>Ducha y vestidores.</li>
        <li>Uso de todas las máquinas</li>
        <li>Uso del área de peso libre.</li>
        <li>Uso del área de CrossFit.</li>
        <li>Playera + pachón de regalo.</li>
 
        <p><button class="btn-mensual" onclick="location.href='menuAdquirirMensual.html'">Adquirir</button></p>
 
      </ul>
      </div>
     
     
 
      
      <div class="card">
 
        <h2>Anual</h2>
 
      <ul>
 
        <h3>Q. 2,200.00</h3>
 
        <li>Horario de 4am a 11pm</li>
        <li>Acceso a nuestras dos sedes</li>
        <li>Ducha y vestidores.</li>
        <li>Uso de todas las máquinas</li>
        <li>Uso del área de peso libre.</li>
        <li>Uso del área de CrossFit.</li>
        <li>Playera + pachón de regalo.</li>
        <li>Viscoutas de 4, 6 y 8</li>
 
        <p><button class="btn-anual" onclick="location.href='menuAdquirirAnual.html'">Adquirir</button></p>
      </div>
 
      </ul>
 
      
      <div class="card">
 
        <h2>UNIFIT</h2>
 
      <ul>
 
        <h4>Q. 250.00 mensuales</h4>    
        <h5>Q. 2,800.00 anuales</h5>
       
       
 
        <li>Horario de 4am a 11pm</li>
        <li>Acceso a nuestras dos sedes</li>
        <li>Ducha y vestidores</li>
        <li>Uso de todas las máquinas</li>
        <li>Uso del área de peso libre</li>
        <li>Uso del área de CrossFit</li>
        <li>Playera + pachón de regalo</li>
        <li>Viscoutas de 4, 6 y 8</li>
        <li>Personal trainer</li>
        <li>Acceso anticipado a ofertas,
        planes y servicios nuevos</li>
 
        <p><button class="btn-unifit" onclick="location.href='menuAdquirirUniFit.html'">Adquirir</button></p>
       
 
      </div>
      </ul>
     
    </div>
  </div>
 
 
 
 
 
</body>
</html>