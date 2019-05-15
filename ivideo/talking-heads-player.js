// JavaScript Document
(function ($) {
	"use strict";
	$.fn.createTalkingHead = function (title, autostart, controls) {
		//Create Player Object
		if (autostart === undefined) {
			autostart = "mouse";
		}
		if (controls === undefined) {
			controls = true;
		}
		var talkingHeadsVideo = {
			autostart: autostart,
			controls: controls,
			path: "https://www.websitetalkingheads.com/ivideo/videos/"
		};
		talkingHeadsVideo = {
			video: talkingHeadsVideo.path + title + ".mp4",
			poster: talkingHeadsVideo.path + title + ".jpg",
			holder: $("#player-holder"),
			player: $("#talking-head-player"),
			container: {
				bar: $("#controls"),
				barWidth: $("#controls").outerWidth(),
				controlsWidth: ($("#btn-restart").outerWidth() * 5) + $("#volume-bar").outerWidth() + 4
			},
			btns: {
				bigPlayBtn: $('#bigPlayBtn'),
				restart: $('#btn-restart'),
				playToggle: $('#btn-play-toggle'),
				stop: $('#btn-stop'),
				mute: $('#btn-mute'),
				fullscreen: $('#btn-fullscreen')
			},
			playing: function () {

			},
			started: false
		};
		var th = talkingHeadsVideo.player,barProgress,
			seekBar = $("#progress-bar"),
			progress = $("#progress"),
			btns = talkingHeadsVideo.btns,
			h = talkingHeadsVideo.holder,
			player = talkingHeadsVideo.player[0];
		th.attr("poster", talkingHeadsVideo.poster);
		th.attr("src", talkingHeadsVideo.video);
		seekBar.css("width", talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth - 12);
		var seekBarWidth = talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth - 12;
		//player functions
		if (!talkingHeadsVideo.started) {
			h.mouseover(function () {
				hoverPlay();
			});
			h.mouseout(function (e) {
				if (e.toElement || e.relatedTarget) {
					return;
				}
				hoverPause();
			});
			h.click(function (e) {
				talkingHeadsVideo.started = true;
				h.unbind();
				player.load();
				player.muted = false;
				player.play();
				btns.bigPlayBtn.hide("slow");
				togglePause();
			});
		} else {
			console.log("hit");
		}
		//Start functions--------------------------------------------------
		function hoverPlay() {
			player.muted = true;
			player.play();
		}

		function hoverPause() {
			player.pause();
		}

		function togglePause() {
			btns.playToggle.addClass("btn-pause");
			btns.playToggle.removeClass("btn-play");
		}

		function togglePlay() {
			btns.playToggle.addClass("btn-play");
			btns.playToggle.removeClass("btn-pause");
		}
		$('#btn-restart').click(function () {
			player.currentTime = 0;
		});
		$('#btn-stop').click(function () {
			player.currentTime = 0;
			player.pause();
			btns.bigPlayBtn.show("slow");
			togglePlay();
		});
		$('#btn-fullscreen').click(function () {
			player.requestFullscreen();
		});
		$('#btn-mute').click(function () {
			if (player.muted) {
				player.muted = false;
				btns.mute.addClass("btn-mute");
				btns.mute.removeClass("btn-unmute");
			} else {
				player.muted = true;
				btns.mute.addClass("btn-unmute");
				btns.mute.removeClass("btn-mute");
			}
		});
		$('#btn-play-toggle').click(function () {
			if (player.paused) {
				btns.bigPlayBtn.hide("slow");
				player.play();
				togglePause();
			} else {
				player.pause();
				btns.bigPlayBtn.show("slow");
				talkingHeadsVideo.started = false;
				togglePlay();
			}
		});
		$('#btn-restart').click(function () {
			player.currentTime = 0;
		});
		btns.bigPlayBtn.click(function () {
			btns.bigPlayBtn.hide("slow");
			player.muted = false;
			player.play();

		});
		// Update the seek bar as the player plays
		player.ontimeupdate = function () {
			// Calculate the slider value
			var barProgress = (player.currentTime/player.duration*100);

			// Update the slider value
			progress.css("width",barProgress + "%").text(getTime(player.currentTime));
		};
		// Event listener for the seek bar
		seekBar.click(function (e) {
			// Calculate the new time
			barProgress = e.offsetX/seekBarWidth;
			player.pause();
			player.currentTime = player.duration * (barProgress);
			progress.css("width",barProgress + "%").text(getTime(player.currentTime));
			player.play();
		});
function getTime(timenow){if (parseInt(timenow) / 60 >= 1) {
	var h = Math.floor(timenow / 3600);
	timenow = timenow - h * 3600;
	var m = Math.floor(timenow / 60);
	var s = Math.floor(timenow % 60);
	if (h.toString().length < 2) {
		h = '0' + h;
	}
	if (m.toString().length < 2) {
		m = '0' + m;
	}
	if (s.toString().length < 2) {
		s = '0' + s;
	}
	return(h + ' : ' + m + ' : ' + s);
} else {
	m = Math.floor(timenow / 60);
	s = Math.floor(timenow % 60);
	if (m.toString().length < 2) {
		m = '0' + m;
	}
	if (s.toString().length < 2) {
		s = '0' + s;
	}
	return(m + ' : ' + s);
}}
	}
}(jQuery));
