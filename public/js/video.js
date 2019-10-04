/* fonction play-pause */
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

/* fonction stop */
function resume(idPlayer) {
  var player = document.querySelector('#' + idPlayer);

  player.currentTime = 0;
  player.pause();
}
