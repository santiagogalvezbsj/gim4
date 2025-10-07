<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inicia sesión en UniFit</title>


   <link href="https://fonts.googleapis.com/css2?family=Bungee&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <style>

    #bg-video {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      z-index: 0;
    }


    #overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.4);
      z-index: 1;
    }


      body {
       display: flex;
       justify-content: center;
       align-items: center;
       height: 97.5vh;
       background: linear-gradient(135deg, #464b67, #383f46);
       font-family: "IBM Plex Sans", sans-serif;
       opacity: 0;
       transition: opacity 0.2s ease-in-out;
      }


      body.loaded {
        opacity: 1;
      }

     .login-box {
       background: #eaeaea;
       padding: 25px;
       border-radius: 12px;
       box-shadow: 0 4px 15px rgba(0,0,0,0.3);
       width: 320px;
       text-align: center;
       color: black;
       opacity: 0;               
       transform: translateY(-50px);
      transition: opacity 1s ease, transform 1s ease;
      }


      .login-box.visible {
        opacity: 1;              
        transform: translateY(0);
      }


     .login-box img {
       width: 100px;
       margin-bottom: -15px;
      }


     .login-box h2 {
      font-family: "Bungee", sans-serif;
      margin-bottom: 25px;
      }



      input {
       width: 90%;
       padding: 10px;
       margin: 10px 0;
       border: 1px solid #404354;
       border-radius: 8px;
       cursor: pointer;
       transition: border-color 0.5s ease, box-shadow 0.3s ease;
       transition: 0.3s ease, transform 0.3s ease;
      }


      input:focus {
       outline: none;
       box-shadow: 0 0 8px rgba(33, 142, 220, 0.5);
       transform: translateY(-5px);
      }


      input:hover {
       transform: translateY(-5px);
       box-shadow: 0 0 8px rgba(33, 142, 220, 0.5);
      }


      .login-box button:nth-of-type(1) {
       width: 95%;
       padding: 10px;
       background: #404354;
       color: white;
       border: none;
       border-radius: 8px;
       cursor: pointer;
       margin-top: 30px;
       transition: background 0.3s ease, transform 0.2s ease;
       font-weight: bold;
      }


      .login-box button:nth-of-type(1):focus {
       background: #3d566e;
       border-color: #034e87;
       outline: none;
       box-shadow: 0 0 8px rgba(33, 142, 220, 0.5);
       transform: translateY(-5px);
      }


      .login-box button:nth-of-type(2) {
       width: 95%;
       padding: 10px;
       background: #404354;
       color: white;
       border: none;
       border-radius: 8px;
       cursor: pointer;
       margin-top: 15px;
       transition: background 0.3s ease, transform 0.2s ease;
       font-weight: bold;
      }


      .login-box button:nth-of-type(2):focus {
       background: #3d566e;
       border-color: #034e87;
       outline: none;
       box-shadow: 0 0 8px rgba(33, 142, 220, 0.5);
       transform: translateY(-5px);
      }


      .login-box button:hover {
       background: #3d566e;
       transform: translateY(-5px);
       box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      }


      .error {
       color: red;
       margin-top: 10px;
       display: none;
      }


    </style>
  </head>

  <body>


    <video autoplay muted loop id="bg-video">
    <source src="Videos/cinematic video.mp4" type="video/mp4">
    Tu navegador no soporta video de fondo.
  </video>


   <div class="login-box">
     <img src="img/img/logo.png" alt="Logo UniFit" width="50" height="100">
     <h2>Bienvenido a UniFit</h2>
     <input type="text" id="user" placeholder="Correo electrónico">
     <input type="password" id="pass" placeholder="Contraseña">

     <button onclick="login()">Acceder como usuario</button>
     <p id="errorMsg" class="error">Credenciales incorrectas.</p>
     <button onclick="loginVendedor()">Acceder como administrador</button>
   </div>
 
   <script>
    function login() {
       const user = document.getElementById("user").value.trim();
       const pass = document.getElementById("pass").value.trim();
       const errorMsg = document.getElementById("errorMsg");
 
       const validUsers = [
        { email: "adminjavier@bilinguesanjuan.edu.gt", password: "1234" },
        { email: "adminsantiago@bilinguesanjuan.edu.gt", password: "1234" },
        { email: "adminvaleria@bilinguesanjuan.edu.gt", password: "1234" },
        { email: "user@unifit.com", password: "1234" }
      ];
 
      const found = validUsers.find(u => u.email === user && u.password === pass);
 
      if (found) {
        alert("¡Inicio de sesión correcto; Bienvenido, usuario! :)")
        window.location.href = "3MenuPrincipal.html";
      } else {
        alert("Credenciales incorrectas, intenta de nuevo"); //errorMsg.style.display = "block";
      }
    }

   </script>

   <script>
     function loginVendedor() {
       const user = document.getElementById("user").value.trim();
       const pass = document.getElementById("pass").value.trim();
       const errorMsg = document.getElementById("errorMsg");

     const validVendedores = [
        { email: "adminjavier@bilinguesanjuan.edu.gt", password: "1234" },
        { email: "adminsantiago@bilinguesanjuan.edu.gt", password: "1234" },
        { email: "adminvaleria@bilinguesanjuan.edu.gt", password: "1234" },
        { email: "admin@unifit.com", password: "1234" },
    ];

    const found = validVendedores.find(u => u.email === user && u.password === pass);

    if(found) {
      alert("¡Inicio de sesión correcto; Bienvenido, administrador! :)")
      window.location.href = "menuVendedor.html";
    } else {
      alert("Credenciales incorrectas, intenta de nuevo");
    }
  }

    window.addEventListener("load", () => {
    document.body.classList.add("loaded");
  });
 </script>
 <script>
  window.addEventListener("load", () => {
  document.querySelector(".login-box").classList.add("visible");
 });
 </script>

  </body>
</html>