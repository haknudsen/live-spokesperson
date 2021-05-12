function createSpotlight(video, autostart, controls, logo, color, size) {
  let spotlight = {
    holder: $("#spotlight"),
    player: $("#spotlight-player"),
    video: "http://www.live-spokesperson.com/spotlight/videos/" + video + ".mp4",
    controls: $("#controls"),
    barWidth: $("#controls").outerWidth(),
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
  spotlight.controls.css("display", "none");
  spotlight.holder.width(size-2);
  spotlight.holder.height(size-2);
  spotlight.player.css({
    "borderColor": "#" + color,
    "borderRadius": "100%"
  });
  spotlight.player.attr("src", spotlight.video);
    console.log("width-" ,spotlight.player[0]);
}
