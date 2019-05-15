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
		var talkingHeadsVideo = {};
		talkingHeadsVideo = {
			autostart: autostart,
			controls: controls,
			path: "https://www.websitetalkingheads.com/ivideo/videos/",
			video: title + ".mp4",
			poster: title + ".jpg",
			holder: $("#player-holder"),
			player: $("#talking-head-player"),
			container: {
				controls: $("#controls"),
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
		var th = talkingHeadsVideo.player,
			barProgress, seekBar = $("#progress-bar"),
			progress = $("#progress"),
			volumeBar = $("#volume-bar"),
			btns = talkingHeadsVideo.btns,
			h = talkingHeadsVideo.holder,
			$controls = talkingHeadsVideo.container.controls,
			player = talkingHeadsVideo.player[0];
		th.attr("poster", talkingHeadsVideo.path + talkingHeadsVideo.poster);
		th.attr("src", talkingHeadsVideo.path + talkingHeadsVideo.video);
		seekBar.css("width", talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth - 12);
		var seekBarWidth = talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth - 12;
		//Set Controls
		console.log( talkingHeadsVideo );
		switch (talkingHeadsVideo.controls){
			case "mouse":
				talkingHeadsVideo.holder.addClass("mouse-controls");
				break;
			case "show":
				$controls.addClass("visible");
				break;
			case "hide":
				$controls.addClass("invisible");
				break;
		}
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
			h.click(function () {
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
		//create button functions
		function btnFunctions(){
		//buttons functions--------------------------------------
		btns.restart.click(function () {
			player.currentTime = 0;
		});
		btns.stop.click(function () {
			player.currentTime = 0;
			player.pause();
			btns.bigPlayBtn.show("slow");
			togglePlay();
		});
		btns.fullscreen.click(function () {
			player.requestFullscreen();
		});
		btns.mute.click(function () {
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
		btns.playToggle.click(function () {
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
			togglePause();
			player.muted = false;
			player.play();

		});}
		// Update the seek bar as the player plays
		player.ontimeupdate = function () {
			var barProgress = (player.currentTime / player.duration * 100);
			progress.css("width", barProgress + "%").text(showTime());
		};
		// Event listener for the seek bar get the new time
		seekBar.click(function (e) {
			barProgress = e.offsetX / seekBarWidth;
			player.pause();
			player.currentTime = player.duration * (barProgress);
			player.play();
		});
		//Show time funcion
		function showTime() {
			var cur = getTime(player.currentTime);
			var dur = getTime(player.duration);
			return cur + "/" + dur;
		}
		//get time - used for current time and duration
		function getTime(timenow) {
			if (parseInt(timenow) / 60 >= 1) {
				var h = Math.floor(timenow / 3600);
				if (isNaN(h)) {
					h = 0
				}
				timenow = timenow - h * 3600;
				var m = Math.floor(timenow / 60);
				if (isNaN(m)) {
					m = 0
				}
				var s = Math.floor(timenow % 60);
				if (isNaN(s)) {
					s = 0
				}
				if (h.toString().length < 2) {
					h = '0' + h;
				}
				if (m.toString().length < 2) {
					m = '0' + m;
				}
				if (s.toString().length < 2) {
					s = '0' + s;
				}
				return (h + ':' + m + ':' + s);
			} else {
				m = Math.floor(timenow / 60);
				if (isNaN(m)) {
					m = 0
				}
				s = Math.floor(timenow % 60);
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
			seekBar.css("width", $("#controls").outerWidth() - (($("#btn-restart").outerWidth() * 5) + $("#volume-bar").outerWidth() + 4) - 12);
		});
	}
}(jQuery));
