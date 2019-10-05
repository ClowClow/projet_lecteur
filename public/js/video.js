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

/* fonction qui gère la mise en plein écran */

function fullscreen() {
  var elem = document.getElementById("videoPlayer");
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  }
}

/* fonction barre de progression */

function update(player) {
  var duration = player.duration; //durée totale
  var time = player.currentTime; //temps écoulé
  var fraction = time/duration;
  var percent = Math.ceil(fraction * 100);

  var progress = document.querySelector('#progressBar');

  progress.style.width = percent + '%';
  /*progress.textContent = percent + '%'; avancée de la vidéo texte*/
}
