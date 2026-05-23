// Capturas los elementos
const player = document.getElementById('player');
let score = 0;

// Aquí debes programar la lógica de escuchar las teclas (flechas o WASD)
document.addEventListener('keydown', (event) => {
    // Ejemplo: si presiona 'ArrowUp', mueves el top del player hacia arriba
    // ... tu código de movimiento aquí ...
});

// Función que se ejecuta cuando chocas con un Transmilenio o tombo
function gameOver() {
    alert("¡Te agarró el tombo! Puntaje final: " + score);
    
    // Le pasamos el puntaje al formulario oculto
    document.getElementById('puntaje-input').value = score;
    // Enviamos el formulario al logica.php
    document.getElementById('formulario-puntaje').submit();
}

// ... Aquí debes crear la función que genere los buses (obstáculos)
// ... y la función que detecte si el 'player' choca con un obstáculo (colisiones)