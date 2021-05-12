// JavaScript Document
// Talking Heads Player version 0.9.1
////controls- true,false, mouse
//  autostart- no, yes, mouse, mute
let talkingHeadsVideo = {
  holder: $("#player-holder"),
  player: $("#talking-head-player"),
  container: {
    controls: $("#controls"),
    barWidth: $("#controls").outerWidth()
  },
  btns: {
    bigPlayBtn: $('#bigPlayBtn'),
    restart: $('#btn-restart'),
    playToggle: $('#btn-play-toggle'),
    stop: $('#btn-stop'),
    mute: $('#btn-mute'),
    fullscreen: $('#btn-fullscreen')
  },
  started: false
};
var th = talkingHeadsVideo.player,
  progress = $("#progress"),
  volumeBar = $("#volume-bar"),
  holder = talkingHeadsVideo.holder,
  btns = talkingHeadsVideo.btns,
  progressBar = $("#progress-bar"),
  time = $("#time"),
  player = talkingHeadsVideo.player[0];
//get controls width and set seekbar width
function setProgressBar() {
    console.log($("#controls").outerWidth());
  if ($("#controls").outerWidth() < 500) {
    volumeBar.css("display", "none");
    volumeBar.width(0);

  } else {
    var newWidth = parseInt($("#controls").outerWidth() / 8);
    volumeBar.width(newWidth);
    volumeBar.css("display", "block");
  }
  let width = 0;
  $("#controls").children().each(function () {
    let x = $(this).outerWidth(true);
    width += x;
  });
  width = width - $("#progress-bar").outerWidth() + 10;
  let progressBarWidth = ($("#controls").outerWidth() - width) + "px";
  progressBar.css("width", progressBarWidth);
}

function createTalkingHead(title, autostart, controls, logo,color,size) {
    console.log(title, autostart, controls, logo, color, size);
  let path, videoPath;
  //Create Player Object
  if (autostart === undefined) {
    autostart = "mouse";
  } //autostart 
  if (controls === undefined || controls === "") {
    controls = true;
  }
  path = "../videos/";
  videoPath = "";
  talkingHeadsVideo.autostart = autostart;
  talkingHeadsVideo.controls = controls;
  talkingHeadsVideo.path = path;
  talkingHeadsVideo.video = path + videoPath + title + ".mp4";
  th.attr({
      "src": talkingHeadsVideo.video,
      "autoplay": true,
      "loop":false
  });
  setProgressBar();
  //-------------------------------Set Controls
  switch (talkingHeadsVideo.controls) {
    case "true":
      $("#controls").addClass("visible");
      $("#controls").css("opacity", 1);
      break;
    case "false":
      $("#controls").addClass("invisible");
      break;
    default:
      $("#controls").addClass("visible");
      $("#controls").css("opacity", 1);
      break;
  }
  //--------------------------------Set autostart
  switch (talkingHeadsVideo.autostart) {
    case "no":
      player.preload = "none";
      poster();
      break;
    case "yes":
      tryAutostart();
      break;
    case "mute":
      playMuted();
      break;
    default:
      tryAutostart();
      break;
  }
  //autostart muted
  function playMuted() {
    player.muted = true;
    th.attr('loop', 'loop');
    btns.mute.css("background","url(btns/volume-up-regular.svg)");
    player.play();
    showPlay();
    btnFunctions();
  }
  //-----------------autostart poster
  function poster() {
    holder.click(function () {
      talkingHeadsVideo.started = true;
      holder.unbind();
      player.load();
      player.muted = false;
      player.play();
      btns.bigPlayBtn.hide("slow");
      showPause();
      btnFunctions();
    });
  }
  //Start functions--------------------------------------------------
  function tryAutostart() {
    let promise = player.play();
    if (promise !== undefined) {
      promise.then(_ => {
        showPause();
      }).catch(error => {
        playMuted();
      });
      btnFunctions();
    }
  }

  function showPause() {
    btns.playToggle.css("background","url(css/btns/pause-circle-regular.svg)");
    btns.bigPlayBtn.hide("slow");
    btns.mute.css("background","url(css/btns/volume-up-regular.svg)");
  }

  function showPlay() {
    btns.playToggle.css("background","url(css/btns/play-circle-regular.svg)");
    btns.bigPlayBtn.show("slow");
  }
  //create button functions
  function btnFunctions() {
    //buttons functions--------------------------------------
    $('#player-holder').click(function () {
      if (!talkingHeadsVideo.started) {
        talkingHeadsVideo.started = true;
        player.currentTime = 0;
        player.muted = false;
        showPause();
        th.removeAttr('loop');
      } else {
        switch (event.target.id) {
          case "btn-restart":
            player.currentTime = 0;
            break;
          case "btn-play-toggle":
          case "player-holder":
          case "talking-head-player":
          case "bigPlayBtn":
            playToggle();
            break;
          case "btn-stop":
            stopPlayer();
            break;
          case "volume-bar":
            volumeChange();
            break;
          case "btn-mute":
            mutePlayer();
            break;
          case "progress":
          case "progress-bar":
            changeTime(event.offsetX);
            break;
          case "btn-fullscreen":
            goFullScreen();
            break;
          default:
            console.log("click default-" + event.target.id);
        }
      }
    });
  }

  function playToggle() {
    if (player.paused) {
      btns.bigPlayBtn.hide("slow");
      player.play();
      showPause();
    } else {
      player.pause();
      btns.bigPlayBtn.show("slow");
      showPlay();
    }
  }

  function stopPlayer() {
    player.currentTime = 0;
    player.pause();
    showPlay();
  }

  function volumeChange() {

  }

  function mutePlayer() {
    if (player.muted) {
      player.muted = false;
    btns.mute.css("background","url(css/btns/volume-up-regular.svg)");
    } else {
      player.muted = true;
    btns.mute.css("background","url(css/btns/volume-mute-regular.svg)");
    }
  }

  function goFullScreen() {
    player.requestFullscreen();
  }

  function changeTime(offset) {
    let w = (offset / progressBar.width());
    progress.css("width", w + '%');
    player.pause();
    player.currentTime = player.duration * w;
    btns.bigPlayBtn.hide("slow");
    player.play();
  }
  //video ended function
  player.onended = function () {
    console.log(player.started);
    player.currentTime = 0;
    btns.bigPlayBtn.show("slow");
    showPlay();
  }
  // Update the seek bar as the player plays
  player.ontimeupdate = function () {
    let progressBar = (player.currentTime / player.duration * 100);
    progress.css("width", progressBar + "%")
    time.text(showTime());
  };
  //Show time funcion
  function showTime() {
    let cur = getTime(player.currentTime);
    let dur = getTime(player.duration);
    return cur + "/" + dur;
  }
  //get time - used for current time and duration
  function getTime(timenow) {
    if (parseInt(timenow) / 60 >= 1) {
      let h = Math.floor(timenow / 3600);
      if (isNaN(h)) {
        h = 0
      }
      timenow = timenow - h * 3600;
      let m = Math.floor(timenow / 60);
      if (isNaN(m)) {
        m = 0
      }
      let s = Math.floor(timenow % 60);
      if (isNaN(s)) {
        s = 0
      }
      if (m.toString().length < 2) {
        m = m;
      }
      if (s.toString().length < 2) {
        s = '0' + s;
      }
      return (m + ':' + s);
    } else {
      let m = Math.floor(timenow / 60);
      if (isNaN(m)) {
        m = 0
      }
      let s = Math.floor(timenow % 60);
      if (isNaN(s)) {
        s = 0
      }
      if (s.toString().length < 2) {
        s = '0' + s;
      }
      return (m + ':' + s);
    }
  }
  // Update the video volume
  volumeBar.change(function () {
    if (player.muted) {
      player.muted = false;
      btns.mute.addClass("btn-mute");
      btns.mute.removeClass("btn-unmute");
    }
    player.volume = volumeBar.val();
  });
  //Update controls on window resize
  $(window).resize(function () {
    setProgressBar();
  });
}
