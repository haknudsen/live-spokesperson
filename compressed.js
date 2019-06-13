$(document).ready(function(){var e,t,o,a=$("#talking-heads-video")[0];$(".poster").click(function(){e=$(this).attr("data-video"),o="https://www.websitetalkingheads.com/spokespeople/videos/"+e+".mp4",t=$(this).attr("alt")?$(this).attr("alt"):"",$("#videoModalLabel").text(t),a.pause(),a.src=o,a.play()}),$("#contact").click(function(){a.pause(),$("#form").addClass("visible"),$("#form").removeClass("invisible")}),$("#contactClose").click(function(){$("#form").removeClass("visible"),$("#form").addClass("invisible")}),$("#mainModal").on("hidden.bs.modal",function(){a.pause()}),$("#mainModal").on("shown.bs.modal",function(){$("#form").removeClass("visible"),$("#form").addClass("invisible"),a.play()})}),$(document).ready(function(){"use strict";$.ajax({url:"js/spokesperson-content.xml",dataType:"xml",success:function(e){console.log("hit");var t=0,o=Array(),a=Array(),s=Array(),n=null,i=null;$(e).find("content").each(function(){a[t]=$(this).find("title").text(),o[t]=$(this).find("paragraph").text(),s[t]=$(this).find("icon").text(),t++});var r=a.length-1,l=Math.floor(Math.random()*r);r<(n=l+1)&&(n=0);r<(i=n+1)&&(i=0);$("#title").text(a[l]),$("#title").addClass("text-center"),$("#content").append("<p>"+o[l]+"</p>"),$("#icon").addClass(s[l]),$("#title2").text(a[n]),$("#title2").addClass("text-center"),$("#content2").append("<p>"+o[n]+"</p>"),$("#icon2").addClass(s[n]),$("#title3").text(a[i]),$("#title3").addClass("text-center"),$("#content3").append("<p>"+o[i]+"</p>"),$("#icon3").addClass(s[i])},error:function(){console.log("Error: Something went wrong")}})}),$(document).ready(function(){$.ajax({url:"http://seovideoexperts.com/wp-json/wp/v2/posts?per_page=1",success:function(e){var t=e[0].excerpt.rendered,o=e[0].link,a='<a href="'+o+'">[&hellip;]</a>',s=t.replace("[&hellip;]",a),n='<a href="'+o+'">',i="</a>",r=n+e[0].title.rendered+i;$("#excerpt-marketing").html(s),$("#title-marketing").html(r),$("#img-marketing").wrap(n+i)},error:function(e){alert("An error occured: "+e.status+" "+e.statusText)}})}),$(document).ready(function(){$.ajax({url:"http://bestwhiteboardvideo.com/wp-json/wp/v2/posts?per_page=1",success:function(e){var t=e[0].excerpt.rendered,o=e[0].link,a='<a href="'+o+'">[&hellip;]</a>',s=t.replace("[&hellip;]",a);$("#excerpt-whiteboard").html(s);var n='<a href="'+o+'">',i="</a>",r=n+e[0].title.rendered+i;$("#title-whiteboard").html(r),$("#img-whiteboard").wrap(n+i)},error:function(e){alert("An error occured: "+e.status+" "+e.statusText)}})}),$(document).ready(function(){"use strict";$(".se-pre-con").fadeOut("slow").delay(500),$("#changeQuote").text(function(){var e=["We learned a long time ago that sometimes it's what you DON'T say that's even more important and really persuades the viewer to take action.","Awesome videos that get RESULTS are captivating, specific and tell YOUR story.  Not ANY story...YOUR story!","Our videos keep brains constantly guessing and so they HAVE TO WATCH your video longer.","We believe your story is different than your competitor's, don't you?","We know all companies are not alike, so we work with you to create the best solution for your company.","The creative process is not found in a template or premade images.  And a questionnaire Asks the wrong questions. Conversations and collaboration are needed to get the best Video.","Our Videos are producing results that are astounding business owners.  They keep commming back for more.","When can we show you how our process can transform your video strategy, engage your leads, and turn them into loyal clients.","We are not your average studio, we don't do questionnaires or templates, we make YOUR video and fair prices, not Ad Agency prices.","We have made tens of thousands of Videos for our very happy customers.","We are continuing to work with great clients from around the North America and the world and we are having a great time brainstorming, collaborating and creating.","Who knows what the best message is for your video?  I certainly don't know right now.  How could I? How could anyone? Until we really talk, ask questions, and listen to your answers.","When you call us, we do the work for you.","Really smart business owners know that it usually takes an outside person with experience in persuasion to know what should be left out of your video.","Adding a Video to your website will boost sales and increase leads.","We pride ourselves on our high quality and successful Spokespeople and professionally created videos.","Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE."],t=e[Math.floor(Math.random()*e.length)];$("#changeQuote").text(t);var o=(new Date).getFullYear();$("#year").text(o)})}),function(s){"use strict";s.fn.padAward=function(){var e=(s("#best-video").width()-s("#best-video").height())/2;s("#best-video").css("padding",e+"px 0")},s.fn.padHeight=function(){var e=this[0],t=this.closest(".holder"),o=s(e).outerHeight(),a=(s(t).outerHeight()-o)/2;s(e).css("margin-top",a+"px")},s.fn.setHeight=function(){var e=100;s(this).each(function(){s(this).height()>e&&(e=s(this).height())}),s(this).height(e)}}(jQuery),$(document).ready(function(){switch($(document).find("title").text()){case"About Live Spokesperson":$("#about").addClass("active");break;case"Articles from Live-Spokesperson.com":$("#articles").addClass("active");break;case"Live Spokesperson Home":$("#home").addClass("active");break;case"Spokespeople by Live-Spokesperson.com":$("#spokespeople").addClass("active"),$("#spokesperson-main").addClass("active");break;case"Our Spokesmen|Live-Spokesperson":$("#spokespeople").addClass("active"),$("#spokesperson-men").addClass("active");break;case"Our Spokeswomen|Live-Spokesperson":$("#spokespeople").addClass("active"),$("#spokesperson-women").addClass("active");break;case"Specialty Spokespeople|Live-Spokesperson":$("#spokespeople").addClass("active"),$("#spokesperson-specialty").addClass("active");break;case"Website Spokesperson Examples":$("#spokespeople").addClass("active"),$("#spokesperson-examples").addClass("active");break;case"Website Spokesperson Software":case"Virtual Spokespeople by Live-Spokesperson":$("#spokespeople").addClass("active"),$("#spokesperson-software").addClass("active")}function o(e,t,o){var a=e.outerHeight(),s=o.offset().top;t.scrollTop()>=s?(o.height(a),e.addClass("affix")):(e.removeClass("affix"),o.height("auto"))}$('[data-toggle="affix"]').each(function(){var e=$(this),t=$("<div></div>");e.before(t),$(window).on("scroll resize",function(){o(e,$(this),t)}),o(e,$(window),t)})}),$(document).ready(function(){var e,t,o,a=$("#talking-heads-video")[0],s="https://www.websitetalkingheads.com/";function n(){$("#videoModalLabel").text(e+t),a.pause(),a.src=o,a.play()}$(".actor").click(function(){e=$(this).attr("data-video"),o=s+"videos/"+e+".mp4",t=$(this).attr("alt")?" - "+$(this).attr("alt"):"",n()}),$(".poster").click(function(){e=$(this).attr("data-video"),o=s+"ivideo/videos/"+e.replace(/ /g,"%20")+".mp4",console.log(o),t=$(this).attr("alt")?" - "+$(this).attr("alt"):"",n()}),$("#contact").click(function(){a.pause(),$("#form").addClass("d-block")}),$("#contactClose").click(function(){$("#form").removeClass("d-block")}),$("#mainModal").on("hidden.bs.modal",function(){a.pause()}),$("#mainModal").on("shown.bs.modal",function(){$("#form").removeClass("d-block"),a.play()})}),$(document).ready(function(){var e=$(document).find("title").text();-1<e.indexOf("About")?$("#about").addClass("active"):-1<e.indexOf("Styles")?$("#styles").addClass("active"):-1<e.indexOf("Spokespeople")?$("#spokespeople").addClass("active"):$("#home").addClass("active");var t=$("nav.navbar");$(window).scroll(function(){180<$(this).scrollTop()?(t.addClass("bg-gradient-light"),t.removeClass("bg-gradient-dark"),t.removeClass("navbar-dark"),t.addClass("navbar-light")):(t.removeClass("bg-gradient-light"),t.addClass("bg-gradient-dark"),t.removeClass("navbar-light"),t.addClass("navbar-dark"))})}),$(document).ready(function(){"use strict";var e=["We learned along time ago that sometimes it's what you DON'T say that's even more important and really persuades the viewer to take action.","Awesome videos that get RESULTS are captivating, specific and tell YOUR story.  Not ANY story...YOUR story!","Our videos keep brains constantly guessing and so they HAVE TO WATCH your video longer.","At Talking Heads®, we believe your story is different than your competitor's, don't you?","We know all companies are not alike, so we work with you to create the best solution for your company.","The creative process is not found in a template or premade images.  And a questionnaire Asks the wrong questions. Conversations and collaboration are needed to get the best Video.","Our Videos are producing results that are astounding business owners.  They keep commming back for more.","When can we show you how the Talking Heads® process can transform your video strategy, engage your leads, and turn them into loyal clients.","Talking Heads® isn't your average studio, we don't do questionnaires or templates, we make YOUR video and fair prices, not Ad Agency prices.","We have made tens of thousands of Videos for our very happy customers.","We are continuing to work with great clients from around the North America and the world and we are having a great time brainstorming, collaborating and creating.","Who knows what the best message is for your video?  I certainly don't know right now.  How could I? How could anyone? Until we really talk, ask questions, and listen to your answers.","When you call us, we do the work for you.","Really smart business owners know that it usually takes an outside person with experience in persuasion to know what should be left out of your video.","Adding a Talking Heads® Video to your website will boost sales and increase leads.","Talking Heads® has over 8 years experience in the Website Video Industry. We pride ourselves on our high quality and successful Spokespeople and professionally created videos.","Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE."],t=e[Math.floor(Math.random()*e.length)];$("#changeQuote").text(t)});var testimonialInc=0;function changeTestimonial(){$("#quote").text(testimonials[testimonialInc].quote).fadeOut("slow",function(){$(this).html(testimonials[testimonialInc].quote).fadeIn(500)}),$("#person").text(testimonials[testimonialInc].person).fadeOut("slow",function(){$(this).html(testimonials[testimonialInc].person).fadeIn(500)}),$("#company").text(testimonials[testimonialInc].company).fadeOut("slow",function(){$(this).html(testimonials[testimonialInc].company).fadeIn(500)}),$("#dash").fadeOut("slow").fadeIn(1500),testimonialInc===testimonials.length-1?testimonialInc=0:testimonialInc++}