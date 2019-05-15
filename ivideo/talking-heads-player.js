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
		var th = talkingHeadsVideo.player,time,
			seekBar = $("#progress-bar"),
			btns = talkingHeadsVideo.btns,
			h = talkingHeadsVideo.holder,
			player = talkingHeadsVideo.player[0];
		th.attr("poster", talkingHeadsVideo.poster);
		th.attr("src", talkingHeadsVideo.video);
		seekBar.css("width", talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth - 6);
		var seekBarWidth = talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth - 6;
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
			var value = player.currentTime/player.duration;

			// Update the slider value
			seekBar.value = value;
		};
		// Event listener for the seek bar
		seekBar.click(function (e) {
			// Calculate the new time
			seekBar.value = e.offsetX/seekBarWidth;
			time = player.duration * (seekBar.value);
			player.currentTime = time;
		});

	}
}(jQuery));
