<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unifit - Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Bungee&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  body {
      font-family: "IBM Plex Sans", sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      background: #dbd4d4;
      color: #333;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
  }

  body.loaded {
    opacity: 1;
  }


  .message-container,
  .scroll-bar,
  .buttons-container,
  .buttons-container2 {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }


  .button1-animation {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }


  .button2-animation {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }


  .button3-animation {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }


  .button4-animation {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }


  .button5-animation {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }


  .button6-animation {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }


  body.loaded .message-container,
  body.loaded .scroll-bar,
  body.loaded .buttons-container,
  body.loaded .buttons-container2 {
    opacity: 1;
    transform: translateY(0);
  }


  body.loaded .button1-animation {
    opacity: 1;
    transform: translateY(0);
  }


  body.loaded .button2-animation {
    opacity: 1;
    transform: translateY(0);
  }


  body.loaded .button3-animation {
    opacity: 1;
    transform: translateY(0);
  }


  body.loaded .button4-animation {
    opacity: 1;
    transform: translateY(0);
  }


  body.loaded .button5-animation {
    opacity: 1;
    transform: translateY(0);
  }


  body.loaded .button6-animation {
    opacity: 1;
    transform: translateY(0);
  }


  .button1-animation {
    transition-delay: 0.4s;
  }


  .button2-animation {
    transition-delay: 0.6s;
  }


  .button3-animation {
    transition-delay: 0.8s;
  }


  .button4-animation {
    transition-delay: 0.6s;
  }


  .button5-animation {
    transition-delay: 0.8s;
  }


  .button6-animation {
    transition-delay: 1s;
  }


  .message-container {
    transition-delay: 0.2s;
  }


  .scroll-bar {
    transition-delay: 0.4s;
  }


  .buttons-container {
    transition-delay: 0.6s;
  }


  .buttons-container2 {
    transition-delay: 0.8s;
  }


  header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 70px;
    background: linear-gradient(90deg, #c8c8c8, #404354);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    color: rgb(255, 255, 255);
    z-index: 1000;
    
  }


  header img {
    width: 65px;
    height: 65px;
    margin: -5px 0 0  20px;
  }


  .nombre h2 {
    font-size: 10px;
    margin: -12px 0 0 -10px ;
    color: black;
    font-family: "Lato", sans-serif;
  }


  header  h2 {
    font-size: 15px;
  }


  nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
  }
    

  nav ul li {
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
    font-family: "IBM Plex Sans", sans-serif;
  }


  nav ul li:hover {
    text-decoration: underline;
  }


  .dropdown { 
    position: absolute;
    top: 98%;
    left: 50%;
    transform: translateX(-50%);
    width: 98%;
    background: linear-gradient(to bottom, #f0f0f0, #d0d0d0);
    border-radius: 0 0 40px 10px; /* igual que el botón */
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, opacity 0.4s ease;
  }


  .dropdown p {
    padding: 15px;
    margin: 0;
    cursor: pointer;
    transition: background 0.3s;
  }


  .dropdown.open {
    max-height: 500px;
    opacity: 1;
  }


  .dropdown p:hover {
    background: #034e87;
    color: white;
  }

  .button1:hover + .dropdown {
    max-height: 500px;
    opacity: 1;
  }

   
  main {
    margin-top: 140px;
    padding: 20px;
  }


  .moving-box {
    display: flex;
    gap: 20px;
    overflow: hidden;
    white-space: nowrap;
    margin-top: 20px;
    width: 100%;
  }


  .item {
    width: 250px;
    min-height: 100px;
    padding: 20px;
    background: linear-gradient(135deg, #034e87, #404354);
    color: white;
    font-weight: bold;
    border-radius: 15px;
    flex-shrink: 0;

    display: flex;              /* permite centrar el contenido */
    align-items: center;        /* centra verticalmente */
    justify-content: center;    /* centra horizontalmente */
    text-align: center;         /* centra varias líneas de texto */
    word-wrap: break-word;      /* evita que se salga del cuadro */
    overflow-wrap: break-word; 
    white-space: normal;
    line-height: 1.4; 
    flex-direction: column;
  }


  /*Botones*/


  .principal-container {
    width: 100%;
    height: 600px;
    background-color: #25293d;
    border-radius: 15px;
    flex-direction: column;
    padding-top: 120px;
  }


  .buttons-container {
    margin: 20px auto;
    padding: 50px;
    height: 400px;
    display: flex;
    justify-content: center;
    gap: 60px;
  }


  .buttons-container2 {
    margin: 20px auto;
    margin-top: -70px;
    padding: 50px;
    height: 400px;
    display: flex;
    justify-content: center;
    gap: 60px;
  }


  .button1-animation {
    display: flex;
    width: fit-content;
    height: fit-content;
    padding: 0;
    justify-content: center;
    height: 300px;
  }


  .button2-animation {
    display: flex;
    width: fit-content;
    height: fit-content;
    padding: 0;
    justify-content: center;
    height: 300px;
  }


  .button3-animation {
    display: flex;
    width: fit-content;
    height: fit-content;
    padding: 0;
    justify-content: center;
    height: 300px;
  }


  .button4-animation {
    display: flex;
    width: fit-content;
    height: fit-content;
    padding: 0;
    justify-content: center;
    height: 300px;
  }


  .button5-animation {
    display: flex;
    width: fit-content;
    height: fit-content;
    padding: 0;
    justify-content: center;
    height: 300px;
  }


  .button6-animation {
    display: flex;
    width: fit-content;
    height: fit-content;
    padding: 0;
    justify-content: center;
    height: 300px;
  }


  .button1 {
    background: linear-gradient(10deg, #404354, #c8c8c8);
    width: 350px;
    padding: 15px;
    background-color: #888787;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-top-left-radius: 40px;    /* esquina superior izquierda */
    border-top-right-radius: 10px;   /* esquina superior derecha */
    border-bottom-right-radius: 40px;/* esquina inferior derecha */
    border-bottom-left-radius: 10px; /* esquina inferior izquierda */
    margin: 20px;
    transition: transform 0.3s, box-shadow 0.3s;   
  }


  .button2 {
    width: 350px;
    padding: 15px;
    background: linear-gradient(10deg, #404354, #c8c8c8);
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;    
    border-top-left-radius: 40px;    /* esquina superior izquierda */
    border-top-right-radius: 10px;   /* esquina superior derecha */
    border-bottom-right-radius: 40px;/* esquina inferior derecha */
    border-bottom-left-radius: 10px; /* esquina inferior izquierda */
    margin: 20px;
  }


  .button3 {
    width: 350px;
    padding: 15px;
    background: linear-gradient(10deg, #404354, #c8c8c8);
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;    
    border-top-left-radius: 40px;    /* esquina superior izquierda */
    border-top-right-radius: 10px;   /* esquina superior derecha */
    border-bottom-right-radius: 40px;/* esquina inferior derecha */
    border-bottom-left-radius: 10px; /* esquina inferior izquierda */
    margin: 20px;
  }


  .button4 {
    background: linear-gradient(10deg, #404354, #c8c8c8);
    width: 350px;
    padding: 15px;
    background-color: #888787;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-top-left-radius: 40px;    /* esquina superior izquierda */
    border-top-right-radius: 10px;   /* esquina superior derecha */
    border-bottom-right-radius: 40px;/* esquina inferior derecha */
    border-bottom-left-radius: 10px; /* esquina inferior izquierda */
    margin: 20px;
    transition: transform 0.3s, box-shadow 0.3s;   
  }


  .button5 {
    background: linear-gradient(10deg, #404354, #c8c8c8);
    width: 350px;
    padding: 15px;
    background-color: #888787;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-top-left-radius: 40px;    /* esquina superior izquierda */
    border-top-right-radius: 10px;   /* esquina superior derecha */
    border-bottom-right-radius: 40px;/* esquina inferior derecha */
    border-bottom-left-radius: 10px; /* esquina inferior izquierda */
    margin: 20px;
    transition: transform 0.3s, box-shadow 0.3s;   
  }


  .button6 {
    background: linear-gradient(10deg, #404354, #c8c8c8);
    width: 350px;
    padding: 15px;
    background-color: #888787;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-top-left-radius: 40px;    /* esquina superior izquierda */
    border-top-right-radius: 10px;   /* esquina superior derecha */
    border-bottom-right-radius: 40px;/* esquina inferior derecha */
    border-bottom-left-radius: 10px; /* esquina inferior izquierda */
    margin: 20px;
    transition: transform 0.3s, box-shadow 0.3s;   
  }


  .button1 h1 {
    font-size: 15px;
    margin-bottom: 15px;
  }


  .button2 h1 {
    font-size: 15px;
    margin-bottom: 15px;
  }


  .button3 h1 {
    font-size: 15px;
    margin-bottom: 15px;
  }


  .button4 h1 {
    font-size: 15px;
    margin-bottom: 15px;
  }


  .button5 h1 {
    font-size: 15px;
    margin-bottom: 15px;
  }


  .button6 h1 {
    font-size: 15px;
    margin-bottom: 15px;
  }


  .button1:hover {
    transform: translateY(-9px);
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
  }


  .button2:hover {
    transform: translateY(-9px);
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
  }


  .button3:hover {
    transform: translateY(-9px);
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
  }


  .button4:hover {
    transform: translateY(-9px);
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
  }


  .button5:hover {
    transform: translateY(-9px);
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
  }


  .button6:hover {
    transform: translateY(-9px);
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
  }
  

  .button1:focus {
    outline: none ;
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
    transform: translateY(-9px);
  }


  .button2:focus {
    outline: none;
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
    transform: translateY(-9px);
  }


  .button3:focus {
    outline: none;
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
    transform: translateY(-9px);
  }


  .button4:focus {
    outline: none ;
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
    transform: translateY(-9px);
  }


  .button5:focus {
    outline: none ;
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
    transform: translateY(-9px);
  }


  .button6:focus {
    outline: none ;
    box-shadow: 10px 10px 10px rgba(36, 28, 106, 0.3);
    transform: translateY(-9px);
  }


  .message-container {
    color: white;
    margin: 0 auto 20px auto;
    display: block;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }


  .message-container {
    flex: 1;
    text-align: left;   /* 🔹 texto alineado a la izquierda */
    margin: 0;
    color: white;
    margin-left: 60px;
    margin-bottom: 100px;
  }


  .message-container h1 {
    font-family: "Bungee", sans-serif;
    margin-top: -10px;
    font-size: 70px;
  }


  .message-container h2 {
    font-size: 20px;
    margin-top: 10px;
    font-size: 18px;
  }


  /*Carrusel*/


  .scroll-bar {
    margin: 180px auto -310px auto;
    width: 52.5%;
    display: flex;
    gap: 20px;
    overflow-x: auto;         /* 🔹 permite desplazar horizontal */
    scroll-snap-type: x mandatory; /* 🔹 hace que los cuadros se alineen */
    padding: 15px;
    border-radius: 15px;
    background: #1f2233;
  }


  /* Personalizar barra de desplazamiento */
  .scroll-bar::-webkit-scrollbar {
    height: 10px;
  }


  .scroll-bar::-webkit-scrollbar-thumb {
    background: #034e87;
    border-radius: 10px;
  }


  .scroll-item {
    flex: 0 0 250px;            /* 🔹 ancho fijo por tarjeta */
    background: linear-gradient(135deg, #034e87, #404354);
    color: white;
    padding: 20px;
    border-radius: 15px;
    font-weight: bold;
    text-align: center;
    scroll-snap-align: start;  /* 🔹 se “ancla” al deslizar */
  }


  /*Cambio de fondo en "focus" por botón*/


  .buttons-container button {
    width: 100%;
    max-width: 350px;
    position: relative;
    overflow: hidden;
    z-index: 0;
  }


  .buttons-container2 button {
    width: 100%;
    max-width: 350px;
    position: relative;
    overflow: hidden;
    z-index: 0;
  }


  .buttons-container button::after {
    content: "";
    position: absolute;
    inset: 0;
    background: #3d566e; /* color al pasar */
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
    border-radius: inherit;
  }


  .buttons-container2 button::after {
    content: "";
    position: absolute;
    inset: 0;
    background: #3d566e; /* color al pasar */
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
    border-radius: inherit;
  }


  .buttons-container button:hover::after,
  .buttons-container button:focus::after {
    opacity: 1;
  }


  .buttons-container2 button:hover::after,
  .buttons-container2 button:focus::after {
    opacity: 1;
  }


  /*Carrusel*/


  .welcome-carousel {
    display: flex;
    justify-content: space-between; /* separa izquierda/derecha */
    align-items: center;            /* centra verticalmente */
    gap: 40px;                      /* espacio entre texto y carrusel */
    width: 90%;                     /* ancho del contenedor */
    margin: 0 auto;                 /* centra el bloque en la página */
    margin-top: 10  px;
  }


  .carousel {
    position: relative;
    width: 350px;         
    height: 150px;
    margin: 70px auto 30px auto;
    padding: 0;
    background: #1f2233;
    border-radius: 15px;
    overflow: hidden;     
    user-select: none;    
    pointer-events: none; 
    display: flex;
    justify-content: center;
    align-items: center;
  }


  .carousel {
    flex: 1;
    max-width: 400px;  /* 🔹 tamaño controlado */
    margin: 0;         /* quitamos auto-centro */
    margin-right: 60px;
    margin-top: -130px;
  }

  .carousel-item.active {
    opacity: 1;
    transform: scale(1);         /* 🔹 se agranda */
  }


  .carousel-item {
    position: absolute;
    inset: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #034e87, #404354);
    color: white;
    font-weight: bold;
    border-radius: 15px;
    opacity: 0;
    transform: scale(0.8);
    transition: all 1s ease;
    overflow: hidden; /* 🔹 para que el degradado quede dentro */
  }


  .carousel-item::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(50, 50, 50, 0.4), transparent);
    opacity: 0;
    transition: opacity 1s ease;
    pointer-events: none;
  }


  .carousel-item.active {
    opacity: 1;
    transform: scale(1);
  }


  .carousel-item.active::after {
    opacity: 1; /* 🔹 el degradado aparece */
  }


  .register-text:hover {
    transform: translateY(-2px);
    color: #7398d2;
    text-decoration: underline;
  }


  footer {
    width: 100%;
    background: linear-gradient(90deg, #404354, #c8c8c8);
    color: white;
    text-align: center;
    padding: 15px 10px;
    font-size: 14px;
    margin-top: auto; /* 🔹 hace que quede pegado abajo */
    border-top: 2px solid #2a2d3a;
    font-family: "IBM Plex Sans", sans-serif;
  }


  </style>
</head>


<body>

  <!-- 🔹 Barra superior -->
  <header>
   <div class="nombre">
    <img src="img/img/logo.png">
     <h2>¡Donde nada es imposible!</h2>
    </div>
    <nav>
       <ul>

        <li class="register-text" onclick="More()">Sobre nosotros</li>

        <li class="register-text" onclick="Noti()">Notificaciones</li>

      
       <!-- <li>Clientes</li> -->
       </ul>
      </nav>
  </header>
  <div class="principal-container">
<div class="welcome-carousel">
  <div class="message-container">
    <h1>¡Bienvenido, usuario!</h1>
    <div class="saludo">
      <h2>¿Qué te gustaría hacer el día de hoy?</h2>
    </div>
  </div>
  
  <div class="carousel">
    <div class="carousel-item active">¡Varias opciones creadas para tí!</div>
    <div class="carousel-item">Tip: Duerme más de 5 horas</div>
    <div class="carousel-item">Descubre el origen de nuestra idea</div>
    <div class="carousel-item">¡Revisa los planes que te esperan!</div>
    <div class="carousel-item">¡Pasa menos tiempo en TikTok!</div>
    <div class="carousel-item">Planea un estilo de vida saludable</div>
    <div class="carousel-item">La constancia es la clave</div>
    <div class="carousel-item">¡Hola, mundo!</div>
  </div>
</div>


    <div class="buttons-container">
      <div class="button1-animation">
        <button class="button1" onclick="location.href='4MenuPlanes.html'">
          <h1>¿No sabes cómo empezar?</h1>
          <h2>¡Revisa nuestros planes disponibles!</h2>
        </button>
      </div>
      <div class="button2-animation">
        <button class="button2" onclick="location.href='5MenuProductos.html'">
          <h1>¿Buscas algo en particular?</h1>
          <h2>¡Revisa nuestros productos en venta!</h2>
        </button>
      </div>
    <div class="button3-animation">
      <button class="button3" onclick="location.href='6MenuServicios.html'">
        <h1>¿Buscas empezar una nueva rutina?</h1>
        <h2>¡Revisa nuestros servicios actuales!</h2>
      </button>
    </div>
    </div>
    <div class="buttons-container2">
      <div class="button4-animation">
        <button class="button4" onclick="Acerca()">
          <h1>¿Quieres estar al tanto de todo?</h1>
          <h2>¡Descubre la información más reciente sobre UNIFIT!</h2>
        </button>
      </div>
      <div class="button5-animation">
        <button class="button5" onclick="Noti()">
          <h1>¿Buscas nueva actividad?</h1>
          <h2>¡Encuentra eventos recientes organizados por nosotros!</h2>
        </button>
      </div>
      <div class="button6-animation">
        <button class="button6" onclick="Acerca()">
          <h1>¿Quieres llevar una vida más saludable?</h1>
          <h2>¡Lee sobre hábitos recomendados para incluir en tu día a día!</h2>
        </button>
      </div>
    </div>

  <footer>
    <p>© 2025 UNIFIT. Todos los derechos reservados.</p>
    
  </footer>


  <script>
  const scrollBar = document.querySelector('.scroll-bar');
  let scrollAmount = 0;

  function autoScroll() {
    if (scrollBar.scrollLeft + scrollBar.offsetWidth >= scrollBar.scrollWidth) {
      scrollBar.scrollTo({ left: 0, behavior: 'smooth' }); // 🔹 vuelve al inicio
    } else {
      scrollBar.scrollBy({ left: 270, behavior: 'smooth' }); // 🔹 avanza 1 tarjeta
    }
  }

  setInterval(autoScroll, 3000); // cada 3 segundos se mueve
  </script>

  <script>
  const items = document.querySelectorAll(".carousel-item");
  let current = 0;

  function showNext() {
    items[current].classList.remove("active"); 
    current = (current + 1) % items.length;    
    items[current].classList.add("active");    
  }

  setInterval(showNext, 3000); 
  </script>

  <script>
    window.addEventListener("load", () => {
      document.body.classList.add("loaded"); // Esto activa las animaciones
    });
  </script>
  
  <script>
  window.addEventListener("load", () => {
    document.body.classList.add("loaded"); // activa animaciones
    window.scrollTo(0, 0); // fuerza scroll arriba
  });
</script>

<script>
  function More() {
    alert("Disponible próximamente, ¡mantente al tanto!")
  }

  function Noti() {
    alert("Disponible próximamente, seguimos trabajando en esto :)")
  }

  function Acerca() {
    alert("Por ahora, esta sección no está disponible :D")
  }
</script>

  

</body>
</html>