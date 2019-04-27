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
				volume: $('#btn-volume'),
				fullscreen: $('#btn-fullscreen')
			},
			playing: function () {

			},
			started: false
		};
		var th = talkingHeadsVideo.player,
			p = talkingHeadsVideo.player[0],
			h = talkingHeadsVideo.holder;
		th.attr("poster", talkingHeadsVideo.poster);
		th.attr("src", talkingHeadsVideo.video);
		$("#progress-bar").css("width", talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth);
		//player functions
		if (!talkingHeadsVideo.started) {
			h.mouseover(function (e) {
					hoverPlay();
			});
			h.mouseout(function (e) {
				var element = e.toElement || e.relatedTarget;
				if(h[0].id === element.parentNode.id){
					return;
				}
				hoverPause();
			});
		}

		function hoverPlay() {
			p.muted = true;
			p.play();
		}

		function hoverPause() {
			p.pause();
		}
	}
}(jQuery));
