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
			h = talkingHeadsVideo.holder;
			th.p = talkingHeadsVideo.player[0],
			th.btns = talkingHeadsVideo.btns;
		th.attr("poster", talkingHeadsVideo.poster);
		th.attr("src", talkingHeadsVideo.video);
		$("#progress-bar").css("width", talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth - 6);
		//player functions
		if (!talkingHeadsVideo.started) {
			h.mouseover(function () {
					hoverPlay();
			});
			h.mouseout(function (e) {
				if(e.toElement || e.relatedTarget){
					return;
				}
				hoverPause();
			});
			h.click(function(e){
				console.log( e.target.id );
				talkingHeadsVideo.started = true;
				h.unbind();
				th.p.load();
				th.p.muted = false;
				th.p.play();
				th.btns.bigPlayBtn.hide("slow");
			});
		}else{
			console.log( "hit" );
		}

		function hoverPlay() {
			th.p.muted = true;
			th.p.play();
		}

		function hoverPause() {
			th.p.pause();
		}
	}
}(jQuery));
