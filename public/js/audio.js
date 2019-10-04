/* fond d'écran vidéo */
$('#mainVid')[0].play();

/* js pour inter-changer les icônes */

var getBtn = document.getElementById('playBtn');
var getIcone = document.getElementById('transportIcone');

getBtn.addEventListener('click', function() {
  if(getIcone.className === "far fa-play-circle fa-2x") {
    getIcone.setAttribute('class', 'far fa-pause-circle fa-2x');
  } else {
    getIcone.setAttribute('class', 'far fa-play-circle fa-2x');
  }
})

/* fonction play-pause */
function play(idPlayer, audioControl) {
  var player = document.querySelector('#' + idPlayer);
  if (player.paused) {
      player.play();
    } else {
      player.pause();
    }
}

/* fonction stop */
function resume(idPlayer) {
  var player = document.querySelector('#' + idPlayer);

  player.currentTime = 0;
  player.pause();
}

/* fonction pour régler le volume */

function volume(idPlayer, vol) {
  var player = document.querySelector('#' + idPlayer);

  player.audioVolume = vol;
}
