// JavaScript Document
$(document).ready(function () {
	var video = $("#talking-heads-video_html5_api")[0];
	var srcBase = "https://www.websitetalkingheads.com/";
	var name, alt, srcVideo, formLeft;
	$(".actor").click(function () {
		name = $(this).attr("data-video");
		console.log( name );
		srcVideo = srcBase + "videos/" + name + ".mp4";
		if (!$(this).attr("alt")) {
			alt = "";
		} else {
			alt = " - " + $(this).attr("alt");
		}
		showVideo();
	});
	$(".poster").click(function () {
		name = $(this).attr("data-video");
		srcVideo = srcBase + "ivideo/videos/" + name + ".mp4";
		if (!$(this).attr("alt")) {
			alt = "";
		} else {
			alt = " - " + $(this).attr("alt");
		}
		showVideo();
	});

	function showVideo() {
		$('#videoModalLabel').text(name + alt);
		video.pause();
		video.src = srcVideo;
		video.play();
	}
	$('#contact').click(function () {
		video.pause();
		$('#form').addClass('d-block');
		$('#form').css("left", formLeft);
	});
	$('#contactClose').click(function () {
		$('#form').removeClass('d-block');
	})
	$('#mainModal').on('hidden.bs.modal', function () {
		video.pause();
	});
	$('#mainModal').on('shown.bs.modal', function () {
		$('#form').removeClass('d-block');
		video.play();
	});
});
