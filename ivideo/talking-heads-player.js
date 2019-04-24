// JavaScript Document
(function ($) {
	"use strict";
	$.fn.createTalkingHead = function (title, primaryColor, secondaryColor, autostart, controls) {
		//Create Player Object
		if (primaryColor === undefined) {
			primaryColor = "primary";
		}
		if (secondaryColor === undefined) {
			secondaryColor = "secondary";
		}
		if (autostart === undefined) {
			autostart = "mouse";
		}
		if (controls === undefined) {
			controls = "primary";
		}
		var talkingHeadsVideo = {
			primaryColor: primaryColor,
			secondaryColor: secondaryColor,
			autostart: controls,
			path: "https://www.websitetalkingheads.com/ivideo/videos/"
		};
		talkingHeadsVideo = {
			video: talkingHeadsVideo.path + title + ".mp4",
			poster: talkingHeadsVideo.path + title + ".jpg",
			player: $("#talking-head-player"),
			container: {
				bar: $("#controls"),
				barWidth: $("#controls").outerWidth(),
				controlsWidth: ($("#btn-restart").outerWidth()*5) + $("#volume-bar").outerWidth() +4
			}
		};
		console.log($("#volume-bar").outerWidth());
		console.log(talkingHeadsVideo.container.controlsWidth);
		console.log(talkingHeadsVideo.container.barWidth);
		talkingHeadsVideo.player.attr("poster", talkingHeadsVideo.poster);
		talkingHeadsVideo.player.attr("src", talkingHeadsVideo.video);
		talkingHeadsVideo.player.attr("src", talkingHeadsVideo.video);
		$("#progress-bar").css("width", talkingHeadsVideo.container.barWidth - talkingHeadsVideo.container.controlsWidth);

	}
}(jQuery));
