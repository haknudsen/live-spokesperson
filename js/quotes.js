// JavaScript Document
$(document).ready(
function () {
    "use strict";
    var footQuote = [
        "We learned along time ago that sometimes it's what you DON'T say that's even more important and really persuades the viewer to take action.",
        "Awesome videos that get RESULTS are captivating, specific and tell YOUR story.  Not ANY story...YOUR story!", "Our videos keep brains constantly guessing and so they HAVE TO WATCH your video longer.", "At Talking Heads®, we believe your story is different than your competitor's, don't you?", "We know all companies are not alike, so we work with you to create the best solution for your company.", "The creative process is not found in a template or premade images.  And a questionnaire Asks the wrong questions. Conversations and collaboration are needed to get the best Video.", "Our Videos are producing results that are astounding business owners.  They keep commming back for more.", "When can we show you how the Talking Heads® process can transform your video strategy, engage your leads, and turn them into loyal clients.", "Talking Heads® isn't your average studio, we don't do questionnaires or templates, we make YOUR video and fair prices, not Ad Agency prices.", "We have made tens of thousands of Videos for our very happy customers.", "We are continuing to work with great clients from around the North America and the world and we are having a great time brainstorming, collaborating and creating.", "Who knows what the best message is for your video?  I certainly don't know right now.  How could I? How could anyone? Until we really talk, ask questions, and listen to your answers.", "When you call us, we do the work for you.", "Really smart business owners know that it usually takes an outside person with experience in persuasion to know what should be left out of your video.", "Adding a Talking Heads® Video to your website will boost sales and increase leads.", "Talking Heads® has over 8 years experience in the Website Video Industry. We pride ourselves on our high quality and successful Spokespeople and professionally created videos.", "Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE."

    ];
    var theQuote = footQuote[Math.floor(Math.random() * footQuote.length)];
    $("#changeQuote").text(theQuote);
console.log(theQuote);
});
