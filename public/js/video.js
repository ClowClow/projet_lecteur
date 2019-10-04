/* fonction pour mettre en pause la vidéo */
function play(idPlayer, videoControl) {
  var player = document.querySelector('#' + idPlayer);

  if (player.paused) {
    player.play();
    videoControl.textContent = 'Pause';
  } else {
    player.pause();
    videoControl.textContent = 'Play';
  }
}

/* fonction pour arrêter la vidéo */
function resume(idPlayer) {
  var player = document.querySelector('#' + idPlayer);

  player.currentTime = 0;
  player.pause();
}

/* fonction pour régler le volume */

function volume(idPlayer, vol) {
  var player = document.querySelector('#' + idPlayer);

  player.videoVolume = vol;
}
