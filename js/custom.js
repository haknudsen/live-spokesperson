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
    $(".se-pre-con").fadeOut("slow");
    $.ajax({
        url: "http://seovideoexperts.com/wp-json/wp/v2/posts?per_page=1",
        success: function (result) {
            var excerpt = result[0].excerpt.rendered;
            var link = result[0].link;
            var linkStart = '[&hellip;]';
            var theLink = '<a href="' + link + '">[&hellip;]</a>';
            var excerptLink = excerpt.replace(linkStart, theLink);
            var linkOpen = '<a href="' + link + '">';
            var linkEnd = '</a>';
            var title = linkOpen + result[0].title.rendered + linkEnd;
            $("#excerpt-marketing").html(excerptLink);
            $('#title-marketing').html(title);
            $('#img-marketing').wrap(linkOpen + linkEnd);
        },
        error: function (xhr) {
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
        }
    });
    $.ajax({
        url: "http://bestwhiteboardvideo.com/wp-json/wp/v2/posts?per_page=1",
        success: function (result) {
            var excerpt = result[0].excerpt.rendered;
            var link = result[0].link;
            var linkStart = '[&hellip;]';
            var theLink = '<a href="' + link + '">[&hellip;]</a>';
            var excerptLink = excerpt.replace(linkStart, theLink);
            $("#excerpt-whiteboard").html(excerptLink);
            var linkOpen = '<a href="' + link + '">';
            var linkEnd = '</a>';
            var title = linkOpen + result[0].title.rendered + linkEnd;
            $('#title-whiteboard').html(title);
            $('#img-whiteboard').wrap(linkOpen + linkEnd);
        },
        error: function (xhr) {
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
        }
    });
    var footQuote = [
        "We learned along time ago that sometimes it's what you DON'T say that's even more important and really persuades the viewer to take action.",
        "Awesome videos that get RESULTS are captivating, specific and tell YOUR story.  Not ANY story...YOUR story!", "Our videos keep brains constantly guessing and so they HAVE TO WATCH your video longer.", "At Talking Heads®, we believe your story is different than your competitor's, don't you?", "We know all companies are not alike, so we work with you to create the best solution for your company.", "The creative process is not found in a template or premade images.  And a questionnaire Asks the wrong questions. Conversations and collaboration are needed to get the best Video.", "Our Videos are producing results that are astounding business owners.  They keep commming back for more.", "When can we show you how the Talking Heads® process can transform your video strategy, engage your leads, and turn them into loyal clients.", "Talking Heads® isn't your average studio, we don't do questionnaires or templates, we make YOUR video and fair prices, not Ad Agency prices.", "We have made tens of thousands of Videos for our very happy customers.", "We are continuing to work with great clients from around the North America and the world and we are having a great time brainstorming, collaborating and creating.", "Who knows what the best message is for your video?  I certainly don't know right now.  How could I? How could anyone? Until we really talk, ask questions, and listen to your answers.", "When you call us, we do the work for you.", "Really smart business owners know that it usually takes an outside person with experience in persuasion to know what should be left out of your video.", "Adding a Talking Heads® Video to your website will boost sales and increase leads.", "Talking Heads® has over 8 years experience in the Website Video Industry. We pride ourselves on our high quality and successful Spokespeople and professionally created videos.", "Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE."

    ];
    var theQuote = footQuote[Math.floor(Math.random() * footQuote.length)];
    $("#changeQuote").text(theQuote);
    $.ajax({
        url: "http://www.live-spokesperson.com/js/spokesperson-content.xml",
        dataType: "xml",
        success: parse,
        error: function () {
            console.log("Error: Something went wrong");
        }
    });

    function parse(document) {
        var x = 0;
        var paragraph = Array();
        var spokespersonTitle = Array();
        var icon = Array();
        var random2 = null;
        var random3 = null;
        $(document).find('content').each(function () {
            spokespersonTitle[x] = $(this).find('title').text();
            paragraph[x] = $(this).find('paragraph').text();
            icon[x] = $(this).find('icon').text();
            x++;
        });
        var dataLength = spokespersonTitle.length - 1;
        var random = Math.floor(Math.random() * dataLength);
        random2 = random + 1;
        if (random2 > dataLength) {
            random2 = 0;
        }
        random3 = random2 + 1;
        if (random3 > dataLength) {
            random3 = 0;
        }
        $("#title").text(spokespersonTitle[random]);
        $("#title").addClass('text-center');
        $("#content").append('<p>' + paragraph[random] + '</p>');
        $("#icon").addClass(icon[random]);
        $("#title2").text(spokespersonTitle[random2]);
        $("#title2").addClass('text-center');
        $("#content2").append('<p>' + paragraph[random2] + '</p>');
        $("#icon2").addClass(icon[random2]);
        $("#title3").text(spokespersonTitle[random3]);
        $("#title3").addClass('text-center');
        $("#content3").append('<p>' + paragraph[random3] + '</p>');
        $("#icon3").addClass(icon[random3]);
    }
    var $scrollNav = $('nav.navbar');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 180) {
            $scrollNav.addClass('bg-gradient-light');
            $scrollNav.removeClass('bg-gradient-dark');
            $scrollNav.removeClass('navbar-dark');
            $scrollNav.addClass('navbar-light');
        } else {
            $scrollNav.removeClass('bg-gradient-light');
            $scrollNav.addClass('bg-gradient-dark');
            $scrollNav.removeClass('navbar-light');
            $scrollNav.addClass('navbar-dark');
        }
    })
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
    var toggleAffix = function (affixElement, scrollElement, wrapper) {
        var height = affixElement.outerHeight(),
            top = wrapper.offset().top;

        if (scrollElement.scrollTop() >= top) {
            wrapper.height(height);
            affixElement.addClass("affix");
        } else {
            affixElement.removeClass("affix");
            wrapper.height('auto');
        }

    };


    $('[data-toggle="affix"]').each(function () {
        var ele = $(this),
            wrapper = $('<div></div>');

        ele.before(wrapper);
        $(window).on('scroll resize', function () {
            toggleAffix(ele, $(this), wrapper);
        });

        // init
        toggleAffix(ele, $(window), wrapper);
    });
})

    var testimonialInc = 0;

    function changeTestimonial() {
        $("#quote").text(testimonials[testimonialInc].quote).fadeOut("slow", function () {
            $(this).html(testimonials[testimonialInc].quote).fadeIn(500)
        }), $("#person").text(testimonials[testimonialInc].person).fadeOut("slow", function () {
            $(this).html(testimonials[testimonialInc].person).fadeIn(500)
        }), $("#company").text(testimonials[testimonialInc].company).fadeOut("slow", function () {
            $(this).html(testimonials[testimonialInc].company).fadeIn(500)
        }), $("#dash").fadeOut("slow").fadeIn(500)
        testimonialInc === testimonials.length - 1 ? testimonialInc = 0 : testimonialInc++
    }