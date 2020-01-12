// JavaScript Document
function run() {
	var holder = $("#talking-heads-video");
	var video = holder[0];
	var srcBase = "https://www.websitetalkingheads.com/";
	var name, alt, srcVideo,videoAlt,videoName;
	$(".actor").click(function () {
		name = $(this).attr("data-video");
		srcVideo = srcBase + "videos/" + name + ".mp4";
		if (!$(this).attr("alt")) {
			alt = "";
		} else {
			alt = " - " + $(this).attr("alt");
		}
		showVideo();
	});
	$(".poster").click(function () {
		videoName = $(this).attr("data-video");
		videoAlt = $(this).attr("alt");
		showDemo();
	});
	$(".item").click(function () {
		videoName = $(this).attr("data-video");
		videoAlt = $(this).attr("alt");
		showDemo();
	});

	function showDemo() {
		srcVideo = srcBase + "ivideo/videos/" + videoName.replace(/ /g, "%20") + ".mp4";
		if (!videoAlt) {
			alt = "";
		} else {
			alt = " - " + videoAlt;
		}
		showVideo();

	}

	function showVideo() {
		$('#videoModalLabel').text(videoName);
		$('#mainModal').modal('show');
		video.pause();
		video.src = srcVideo;
		video.play();
	}
	$('#mainModal').on('hidden.bs.modal', function () {
		video.pause();
	});
}

// in case the document is already rendered
if (document.readyState != 'loading') run();
// modern browsers
else if (document.addEventListener) document.addEventListener('DOMContentLoaded', run);
// IE <= 8
else document.attachEvent('onreadystatechange', function () {
	if (document.readyState == 'complete') run();
});
