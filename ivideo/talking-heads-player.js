// JavaScript Document
////controls- show, hide, mouse
//  autostart- no, yes, mouse, mute
(function ($) {
	"use strict";
	$.fn.createTalkingHead = function (title, autostart, controls,actor) {
        var path,videoPath,posterPath;
		//Create Player Object
		if (autostart === undefined) {
			autostart = "mouse";
		} //autostart 
		if (controls === undefined) {
			controls = true;
		}
        if(actor === undefined){
            path = "https://www.websitetalkingheads.com/ivideo/videos/";
			videoPath = "";
			posterPath ="";
        }else{
            path = "https://www.websitetalkingheads.com/spokespeople/";
			videoPath = "videos/";
			posterPath ="posters/";
        }
		var talkingHeadsVideo = {};
		talkingHeadsVideo = {
			autostart: autostart,
			controls: controls,
			path: path,
			video: path + videoPath + title + ".mp4",
			poster: path + posterPath + title + ".jpg",
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
			playing: function () {

			},
			started: false
		};
		var th = talkingHeadsVideo.player,
			progressBar = $("#progress-bar"),
			progress = $("#progress"),
			volumeBar = $("#volume-bar"),
			btns = talkingHeadsVideo.btns,
			holder = talkingHeadsVideo.holder,
			$controls = talkingHeadsVideo.container.controls,
			player = talkingHeadsVideo.player[0];
		th.attr("poster", talkingHeadsVideo.poster);
		th.attr("src", talkingHeadsVideo.video);
		//Set Controls
		setProgressBar();
		//-------------------------------Set Controls
		switch (talkingHeadsVideo.controls) {
			case "show":
				$controls.addClass("visible");
				$controls.css("opacity", 1);
				break;
			case "hide":
				$controls.addClass("invisible");
				break;
			default:
				talkingHeadsVideo.holder.addClass("mouse-controls");
				break;
		}
		//--------------------------------Set autostart
		switch (talkingHeadsVideo.autostart) {
			case "no":
				poster();
				break;
			case "yes":
				tryAutostart();
				break;
			case "mute":
				playMuted();
				break;
			default:
				launchMouse();
				break;
		}
		///autoplay mouse
		function launchMouse() {
			if (!talkingHeadsVideo.started) {
				holder.mouseover(function () {
					hoverPlay();
				});
				holder.mouseout(function (e) {
					if (e.toElement || e.relatedTarget) {
						return;
					}
					hoverPause();
				});
				holder.click(function () {
					talkingHeadsVideo.started = true;
					holder.unbind();
					player.load();
					player.muted = false;
					player.play();
					btns.bigPlayBtn.hide("slow");
					togglePause();
					btnFunctions();
				});
			} 
		}

		function tryAutostart() {
			var promise = player.play();
			if (promise !== undefined) {
				promise.then(_ => {
					togglePause();
					btns.bigPlayBtn.hide("slow");
				}).catch(error => {
					playMuted();
				});
				btnFunctions();
			}
		}
		//autostart muted
		function playMuted() {
			player.muted = true;
			th.attr('loop', 'loop');
			btns.mute.addClass("btn-unmute");
			btns.mute.removeClass("btn-mute");
			btns.bigPlayBtn.show("slow");
			player.play();
			togglePlay();
			holder.click(function(){
				player.muted = false;
				btns.bigPlayBtn.hide("slow");
				togglePause();
				btnFunctions();
			})
		}
		//-----------------autostrt poster
		function poster() {
			holder.click(function () {
				talkingHeadsVideo.started = true;
				holder.unbind();
				player.load();
				player.muted = false;
				player.play();
				btns.bigPlayBtn.hide("slow");
				togglePause();
				btnFunctions();
			});
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
		function btnFunctions() {
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
			});
			player.onended = function () {
				if (!player.muted) {
					player.currentTime = 0;
					btns.bigPlayBtn.show("slow");
					togglePlay();
				}
			}
		}
		// Update the seek bar as the player plays
		player.ontimeupdate = function () {
			var progressBar = (player.currentTime / player.duration * 100);
			progress.css("width", progressBar + "%").text(showTime());
		};
		// Event listener for the seek bar get the new time
		progressBar.click(function (e) {
			progressBar = e.offsetX / $("#progress-bar").width();
			player.pause();
			player.currentTime = player.duration * (progressBar);
			btns.bigPlayBtn.hide("slow");
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
			setProgressBar();
		});
		//get controls with and set seekbar width
		function setProgressBar() {
			if($("#controls").outerWidth() < 500){
					$("#volume-bar").remove();
			}
			var width = 0;
			$("#controls").children().each(function () {
				var x = $(this).outerWidth(true);
				width += x;
			});
			width = width - $("#progress-bar").outerWidth() + 10;
			var progressBarWidth = ($("#controls").outerWidth() - width) + "px";
			progressBar.css("width", progressBarWidth);
		}
	}
}(jQuery));
