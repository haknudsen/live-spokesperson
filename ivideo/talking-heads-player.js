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
		talkingHeadsVideo.player.attr("poster", talkingHeadsVideo.poster);
		talkingHeadsVideo.player.attr("src", talkingHeadsVideo.video);
		$("#progress-bar").css("width", talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth);
		//player functions
		var th = talkingHeadsVideo.player,
			p = talkingHeadsVideo.player[0];
		th.mouseover(function (e) {
			if (e.target !== e.currentTarget) {
			console.log(e.target.id);
				if (!th.started) {
					hoverPlay();
				}
			}
			e.stopPropagation();
		});
		th.mouseleave(function () {
			console.log('out');
			hoverPause();
		});

		function hoverPlay() {
			p.muted = true;
			p.play();
		}

		function hoverPause() {
			p.pause();
		}
	}
}(jQuery));
