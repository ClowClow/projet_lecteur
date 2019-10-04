/* fonction play-pause */
function play(idPlayer, audioControl) {
  var player = document.querySelector('#' + idPlayer);

  if (player.paused) {
    player.play();
    audioControl.textContent = 'Pause';
  } else {
    player.pause();
    audioControl.textContent = 'Play';
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
