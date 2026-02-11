<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>San Valentín</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: linear-gradient(135deg, #ff4e8a, #ff9ecf);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  overflow: hidden;
}

.card {
  background: white;
  padding: 60px;
  border-radius: 30px;
  text-align: center;
  box-shadow: 0 20px 50px rgba(0,0,0,0.3);
  width: 600px;
  position: relative;
  z-index: 10;
}

.imagen-principal {
  width: 300px;
  margin-bottom: 30px;
}

h1 {
  color: #ff2e74;
  font-size: 36px;
  margin-bottom: 30px;
}

/* Contenedor de botones centrado */
.botones {
  display: flex;
  justify-content: center;
  gap: 30px;
  margin-bottom: 20px;
}

button {
  padding: 18px 40px;
  border: none;
  border-radius: 40px;
  font-size: 22px;
  cursor: pointer;
  transition: 0.3s;
}

#si {
  background-color: #ff2e74;
  color: white;
}

#si:hover {
  background-color: #e6005c;
  transform: scale(1.1);
}

#no {
  background-color: #555;
  color: white;
  position: relative;
}

.respuesta {
  display: none;
  margin-top: 30px;
  animation: aparecer 0.5s ease-in-out;
}

.respuesta p {
  font-size: 26px;
  font-weight: bold;
}

.imagen-corazon {
  width: 250px;
  margin-top: 20px;
}

/* Corazones flotando */
.heart {
  position: absolute;
  font-size: 30px;
  animation: flotar 4s linear forwards;
}

@keyframes flotar {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(-600px);
    opacity: 0;
  }
}

@keyframes aparecer {
  from {
    opacity: 0;
    transform: scale(0.8);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}
</style>
</head>

<body>

<div class="card">
  <img src="snoopy.gif" alt="Snoopy" class="imagen-principal">

  <h1>¿Quieres ser mi San Valentín? 💖</h1>

  <div class="botones">
    <button id="si" onclick="aceptar()">Sí ❤️</button>
    <button id="no">No 😅</button>
  </div>

  <div class="respuesta" id="respuesta">
    <p>Que bueno que sí quisiste tilina mia 💕</p>
    <img src="corazon.gif" alt="corazon" class="imagen-corazon">
  </div>
</div>

<!-- Música -->
<audio id="musica" loop>
  <source src="cancion.mp3" type="audio/mp3">
</audio>

<script>

// Botón que huye
const botonNo = document.getElementById("no");

botonNo.addEventListener("mouseover", () => {
  const x = Math.random() * 300 - 150;
  const y = Math.random() * 200 - 100;
  botonNo.style.transform = `translate(${x}px, ${y}px)`;
});

// Aceptar
function aceptar() {
  document.getElementById("respuesta").style.display = "block";

  const musica = document.getElementById("musica");
  musica.volume = 0.3;
  musica.play();

  lanzarCorazones();
}

// Corazones flotando
function lanzarCorazones() {
  for (let i = 0; i < 25; i++) {
    const heart = document.createElement("div");
    heart.classList.add("heart");
    heart.innerHTML = "❤️";
    heart.style.left = Math.random() * window.innerWidth + "px";
    heart.style.top = window.innerHeight + "px";
    heart.style.fontSize = (Math.random() * 20 + 20) + "px";
    document.body.appendChild(heart);

    setTimeout(() => {
      heart.remove();
    }, 4000);
  }
}

</script>

</body>
</html>
