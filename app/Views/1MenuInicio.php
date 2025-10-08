<!DOCTYPE html>
  <html lang="en">
   <head>
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>UniFit - Inicio</title>

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
        z-index: 0;
      }


      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: "IBM Plex Sans", sans-serif;
        margin: 0;
        color: rgb(127, 127, 127);
      }


      .login-box {
        position: relative;
        z-index: 2;
        background: #eaeaea;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        width: 600px;
        text-align: center;
        color: black;
      }   


      .login-box img  {
        width: 130px;
        height: 130px;
        margin-bottom: -5px;
      }


      .login-box h2 {
        font-family: "Bungee", sans-serif;
        margin-bottom: -10px;
      }


      .login-box h3 {
        font-family: "IBM Plex Sans", sans-serif;
        margin-bottom: 2px;
        margin-top: 15px;
        font-size: 20px;
      }


      .login-box button:nth-of-type(1) {
        width: 95%;
        padding: 15px;
        background: #404354;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 15px;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
      }


      .login-box button:nth-of-type(1):focus {
       background: #3d566e;
       border-color: #034e87;
       outline: none;
       box-shadow: 0 0 8px rgba(33, 142, 220, 0.5);
       transform: translateY(-5px);
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


      .register-text {
        margin-top: 15px;
        cursor: pointer;
        color: #404354;
        font-weight: bold;
        font-size: 16px;
      }


      .register-container {
        display: flex;
        justify-content: center;
        gap: 0.1px;
        margin-top: 15px;
      }


      .register-container .normal-text {
        font-size: 15px;
        margin: 5px;
        color: #404354;
      }


      .register-container .register-text {
        font-size: 15px;
        margin:5px;
        color: #404354;
        transition: color 0.3s ease, transform 0.2s ease;
      }


      .register-container .register-text:hover {
        transform: translateY(-2px);
        color: #3d566e;
        text-decoration: underline;
      }


      .google-btn {
        margin: 15px;
        margin-bottom: 5px;
        width: 95%;
        padding: 14px;
        background: #404354;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
      }


      .google-btn:hover {
       transform: translateY(-5px);
       box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      }


      .google-btn img {
       width: 20px; 
       height: 20px;
       margin: -1px
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


  <div id="overlay"></div>


  <div class="login-box">
    <h2>¡EMPIEZA TU CAMBIO HOY MISMO!</h2>
    <h3>Entrena con nosotros en</h3>
    <img src="img/img/logo.png" alt="Logo UniFit">


    <button onclick="login()">Iniciar sesión con tu correo</button>
    <button onclick="logoogle()"class="google-btn">
        Inicia sesión con Google
        <img src="img/img/Google1.png" alt="Logo google">
    </button>

     <div class="register-container">
         <span class= "normal-text">¿No tienes cuenta?</span>
         <span class="register-text" onclick="register()">Regístrate</span>  <!-- <button onclick="register()">¿No tienes cuenta? Regístrate</button> -->
     </div>
    
    

    <p id="errorMsg" class="error">Credenciales incorrectas.</p>
  </div>

  <script>
    function login() {

        window.location.href = "2MenuIniciarSesion.html";
    }


    function logoogle() {
      alert("Próximamente: Google trabajará con nosotros :)");
    }

    function register() {
      alert("Función de registro no implementada aún.");
    }

  </script>

 </body>
</html>
