// JavaScript Document
$(document).ready(function () {
	"use strict";
	$('#changeQuote').text(function () {
		var footQuote = [
			"We learned a long time ago that sometimes it's what you DON'T say that's even more important and really persuades the viewer to take action.",
			"Awesome videos that get RESULTS are captivating, specific and tell YOUR story.  Not ANY story...YOUR story!", "Our videos keep brains constantly guessing and so they HAVE TO WATCH your video longer.", "We believe your story is different than your competitor's, don't you?", "We know all companies are not alike, so we work with you to create the best solution for your company.", "The creative process is not found in a template or premade images.  And a questionnaire Asks the wrong questions. Conversations and collaboration are needed to get the best Video.", "Our Videos are producing results that are astounding business owners.  They keep commming back for more.", "When can we show you how our process can transform your video strategy, engage your leads, and turn them into loyal clients.", "We are not your average studio, we don't do questionnaires or templates, we make YOUR video and fair prices, not Ad Agency prices.", "We have made tens of thousands of Videos for our very happy customers.", "We are continuing to work with great clients from around the North America and the world and we are having a great time brainstorming, collaborating and creating.", "Who knows what the best message is for your video?  I certainly don't know right now.  How could I? How could anyone? Until we really talk, ask questions, and listen to your answers.", "When you call us, we do the work for you.", "Really smart business owners know that it usually takes an outside person with experience in persuasion to know what should be left out of your video.", "Adding a Video to your website will boost sales and increase leads.", "We pride ourselves on our high quality and successful Spokespeople and professionally created videos.", "Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE."

		];
		var theQuote = footQuote[Math.floor(Math.random() * footQuote.length)];
		$('#changeQuote').text(theQuote);
		var d = new Date();
		var year = d.getFullYear();
		$('#year').text(year);
	});
});
(function ($) {
	'use strict';
	$.fn.padAward = function () {
		var p = ($('#best-video').width() - $('#best-video').height()) / 2;
		$('#best-video').css("padding", p + "px 0");
	};
	$.fn.padHeight = function () {
		var base = this[0];
		var holder = this.closest('.holder');
		var bHeight = $(base).outerHeight();
		var hHeight = $(holder).outerHeight();
		var pad = (hHeight - bHeight) / 2;
		$(base).css('margin-top', pad + 'px');
	};
	$.fn.setHeight = function () {
		var maxHeight = 100;
		$(this).each(function () {
			if ($(this).height() > maxHeight) {
				maxHeight = $(this).height();
			}
		});

		$(this).height(maxHeight);
	};
}(jQuery));
//nav
$(document).ready(function () {
	var title = $(document).find("title").text();
	switch (title) {
		case "About Live Spokesperson":
			$('#about').addClass("active");
			break;
		case "Articles from Live-Spokesperson.com":
			$('#articles').addClass("active");
			break;
		case "Live Spokesperson Home":
			$('#home').addClass("active");
			break;
		case "Spokespeople by Live-Spokesperson.com":
			$('#spokespeople').addClass("active");
			$('#spokesperson-main').addClass("active");
			break;
		case "Our Spokesmen|Live-Spokesperson":
			$('#spokespeople').addClass("active");
			$('#spokesperson-men').addClass("active");
			break;
		case "Our Spokeswomen|Live-Spokesperson":
			$('#spokespeople').addClass("active");
			$('#spokesperson-women').addClass("active");
			break;
		case "Specialty Spokespeople|Live-Spokesperson":
			$('#spokespeople').addClass("active");
			$('#spokesperson-specialty').addClass("active");
			break;
		case "Website Spokesperson Examples":
			$('#spokespeople').addClass("active");
			$('#spokesperson-examples').addClass("active");
			break;
		case "Website Spokesperson Software":
			$('#spokespeople').addClass("active");
			$('#spokesperson-software').addClass("active");
			break;
		case "Virtual Spokespeople by Live-Spokesperson":
			$('#spokespeople').addClass("active");
			$('#spokesperson-software').addClass("active");
			break;
		default:
			break;
	}
    var toggleAffix = function(affixElement, scrollElement, wrapper) {
  console.log( "toggle affix" );
    var height = affixElement.outerHeight(),
        top = wrapper.offset().top;
    
    if (scrollElement.scrollTop() >= top){
        wrapper.height(height);
        affixElement.addClass("affix");
    }
    else {
        affixElement.removeClass("affix");
        wrapper.height('auto');
    }
      
  };
  

  $('[data-toggle="affix"]').each(function() {
    var ele = $(this),
        wrapper = $('<div></div>');
    
    ele.before(wrapper);
    $(window).on('scroll resize', function() {
        toggleAffix(ele, $(this), wrapper);
    });
    
    // init
    toggleAffix(ele, $(window), wrapper);
  });
})
