console.log("Iniciando Misión Bogotá...");
const player = document.getElementById('player');
let posX = 190;
let posY = 10;

document.addEventListener('keydown', (e) => {
    if(e.key === 'ArrowUp' && posY < 370) posY += 20;
    if(e.key === 'ArrowDown' && posY > 10) posY -= 20;
    if(e.key === 'ArrowLeft' && posX > 10) posX -= 20;
    if(e.key === 'ArrowRight' && posX < 370) posX += 20;
    
    player.style.bottom = posY + 'px';
    player.style.left = posX + 'px';
});
