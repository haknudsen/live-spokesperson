
        console.log(  );
! function (e) {
  "use strict";
  "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof module && module.exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function (l) {
  function d(e) {
    return parseFloat(e) || 0
  }

  function c(e) {
    var t = l(e),
      a = null,
      s = [];
    return t.each(function () {
      var e = l(this),
        t = e.offset().top - d(e.css("margin-top")),
        o = 0 < s.length ? s[s.length - 1] : null;
      null === o ? s.push(e) : Math.floor(Math.abs(a - t)) <= 1 ? s[s.length - 1] = o.add(e) : s.push(e), a = t
    }), s
  }

  function p(e) {
    var t = {
      byRow: !0,
      property: "height",
      target: null,
      remove: !1
    };
    return "object" == typeof e ? l.extend(t, e) : ("boolean" == typeof e ? t.byRow = e : "remove" === e && (t.remove = !0), t)
  }
  var a = -1,
    s = -1,
    u = l.fn.matchHeight = function (e) {
      var t = p(e);
      if (t.remove) {
        var o = this;
        return this.css(t.property, ""), l.each(u._groups, function (e, t) {
          t.elements = t.elements.not(o)
        }), this
      }
      return this.length <= 1 && !t.target || (u._groups.push({
        elements: this,
        options: t
      }), u._apply(this, t)), this
    };
  u.version = "master", u._groups = [], u._throttle = 80, u._maintainScroll = !1, u._beforeUpdate = null, u._afterUpdate = null, u._rows = c, u._parse = d, u._parseOptions = p, u._apply = function (e, t) {
    var n = p(t),
      o = l(e),
      a = [o],
      s = l(window).scrollTop(),
      i = l("html").outerHeight(!0),
      r = o.parents().filter(":hidden");
    return r.each(function () {
      var e = l(this);
      e.data("style-cache", e.attr("style"))
    }), r.css("display", "block"), n.byRow && !n.target && (o.each(function () {
      var e = l(this),
        t = e.css("display");
      "inline-block" !== t && "flex" !== t && "inline-flex" !== t && (t = "block"), e.data("style-cache", e.attr("style")), e.css({
        display: t,
        "padding-top": "0",
        "padding-bottom": "0",
        "margin-top": "0",
        "margin-bottom": "0",
        "border-top-width": "0",
        "border-bottom-width": "0",
        height: "100px",
        overflow: "hidden"
      })
    }), a = c(o), o.each(function () {
      var e = l(this);
      e.attr("style", e.data("style-cache") || "")
    })), l.each(a, function (e, t) {
      var o = l(t),
        s = 0;
      if (n.target) s = n.target.outerHeight(!1);
      else {
        if (n.byRow && o.length <= 1) return void o.css(n.property, "");
        o.each(function () {
          var e = l(this),
            t = e.attr("style"),
            o = e.css("display");
          "inline-block" !== o && "flex" !== o && "inline-flex" !== o && (o = "block");
          var a = {
            display: o
          };
          a[n.property] = "", e.css(a), e.outerHeight(!1) > s && (s = e.outerHeight(!1)), t ? e.attr("style", t) : e.css("display", "")
        })
      }
      o.each(function () {
        var e = l(this),
          t = 0;
        n.target && e.is(n.target) || ("border-box" !== e.css("box-sizing") && (t += d(e.css("border-top-width")) + d(e.css("border-bottom-width")), t += d(e.css("padding-top")) + d(e.css("padding-bottom"))), e.css(n.property, s - t + "px"))
      })
    }), r.each(function () {
      var e = l(this);
      e.attr("style", e.data("style-cache") || null)
    }), u._maintainScroll && l(window).scrollTop(s / i * l("html").outerHeight(!0)), this
  }, u._applyDataApi = function () {
    var o = {};
    l("[data-match-height], [data-mh]").each(function () {
      var e = l(this),
        t = e.attr("data-mh") || e.attr("data-match-height");
      o[t] = t in o ? o[t].add(e) : e
    }), l.each(o, function () {
      this.matchHeight(!0)
        console.log( "hit" );
    })
  };

  function n(e) {
    u._beforeUpdate && u._beforeUpdate(e, u._groups), l.each(u._groups, function () {
      u._apply(this.elements, this.options)
    }), u._afterUpdate && u._afterUpdate(e, u._groups)
  }
  u._update = function (e, t) {
    if (t && "resize" === t.type) {
      var o = l(window).width();
      if (o === a) return;
      a = o
    }
    e ? -1 === s && (s = setTimeout(function () {
      n(t), s = -1
    }, u._throttle)) : n(t)
  }, l(u._applyDataApi);
  var e = l.fn.on ? "on" : "bind";
  l(window)[e]("load", function (e) {
    u._update(!1, e)
  }), l(window)[e]("resize orientationchange", function (e) {
    u._update(!0, e)
  })
}), $(document).ready(function () {
    "use strict";
    $("#changeQuote").text(function () {
      var e = ["We learned a long time ago that sometimes it's what you DON'T say that's even more important and really persuades the viewer to take action.", "Awesome videos that get RESULTS are captivating, specific and tell YOUR story.  Not ANY story...YOUR story!", "Our videos keep brains constantly guessing and so they HAVE TO WATCH your video longer.", "We believe your story is different than your competitor's, don't you?", "We know all companies are not alike, so we work with you to create the best solution for your company.", "The creative process is not found in a template or premade images.  And a questionnaire Asks the wrong questions. Conversations and collaboration are needed to get the best Video.", "Our Videos are producing results that are astounding business owners.  They keep commming back for more.", "When can we show you how our process can transform your video strategy, engage your leads, and turn them into loyal clients.", "We are not your average studio, we don't do questionnaires or templates, we make YOUR video and fair prices, not Ad Agency prices.", "We have made tens of thousands of Videos for our very happy customers.", "We are continuing to work with great clients from around the North America and the world and we are having a great time brainstorming, collaborating and creating.", "Who knows what the best message is for your video?  I certainly don't know right now.  How could I? How could anyone? Until we really talk, ask questions, and listen to your answers.", "When you call us, we do the work for you.", "Really smart business owners know that it usually takes an outside person with experience in persuasion to know what should be left out of your video.", "Adding a Video to your website will boost sales and increase leads.", "We pride ourselves on our high quality and successful Spokespeople and professionally created videos.", "Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE."],
        t = e[Math.floor(Math.random() * e.length)];
      $("#changeQuote").text(t);
      var o = (new Date).getFullYear();
      $("#year").text(o)
    }), $(".se-pre-con").fadeOut("slow"), $.ajax({
      url: "http://seovideoexperts.com/wp-json/wp/v2/posts?per_page=1",
      success: function (e) {
        var t = e[0].excerpt.rendered,
          o = e[0].link,
          a = '<a href="' + o + '">[&hellip;]</a>',
          s = t.replace("[&hellip;]", a),
          n = '<a href="' + o + '">',
          i = n + e[0].title.rendered + "</a>";
        $("#excerpt-marketing").html(s), $("#title-marketing").html(i), $("#img-marketing").wrap(n + "</a>")
      },
      error: function (e) {
        alert("An error occured: " + e.status + " " + e.statusText)
      }
    }), $.ajax({
      url: "http://bestwhiteboardvideo.com/wp-json/wp/v2/posts?per_page=1",
      success: function (e) {
        var t = e[0].excerpt.rendered,
          o = e[0].link,
          a = '<a href="' + o + '">[&hellip;]</a>',
          s = t.replace("[&hellip;]", a);
        $("#excerpt-whiteboard").html(s);
        var n = '<a href="' + o + '">',
          i = n + e[0].title.rendered + "</a>";
        $("#title-whiteboard").html(i), $("#img-whiteboard").wrap(n + "</a>")
      },
      error: function (e) {
        alert("An error occured: " + e.status + " " + e.statusText)
      }
    });
    var e = ["We learned along time ago that sometimes it's what you DON'T say that's even more important and really persuades the viewer to take action.", "Awesome videos that get RESULTS are captivating, specific and tell YOUR story.  Not ANY story...YOUR story!", "Our videos keep brains constantly guessing and so they HAVE TO WATCH your video longer.", "At Talking Heads®, we believe your story is different than your competitor's, don't you?", "We know all companies are not alike, so we work with you to create the best solution for your company.", "The creative process is not found in a template or premade images.  And a questionnaire Asks the wrong questions. Conversations and collaboration are needed to get the best Video.", "Our Videos are producing results that are astounding business owners.  They keep commming back for more.", "When can we show you how the Talking Heads® process can transform your video strategy, engage your leads, and turn them into loyal clients.", "Talking Heads® isn't your average studio, we don't do questionnaires or templates, we make YOUR video and fair prices, not Ad Agency prices.", "We have made tens of thousands of Videos for our very happy customers.", "We are continuing to work with great clients from around the North America and the world and we are having a great time brainstorming, collaborating and creating.", "Who knows what the best message is for your video?  I certainly don't know right now.  How could I? How could anyone? Until we really talk, ask questions, and listen to your answers.", "When you call us, we do the work for you.", "Really smart business owners know that it usually takes an outside person with experience in persuasion to know what should be left out of your video.", "Adding a Talking Heads® Video to your website will boost sales and increase leads.", "Talking Heads® has over 8 years experience in the Website Video Industry. We pride ourselves on our high quality and successful Spokespeople and professionally created videos.", "Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE."],
      t = e[Math.floor(Math.random() * e.length)];
    $("#changeQuote").text(t), $.ajax({
      url: "js/spokesperson-content.xml",
      dataType: "xml",
      success: function (e) {
        var t = 0,
          o = Array(),
          a = Array(),
          s = Array(),
          n = null,
          i = null;
        $(e).find("content").each(function () {
          a[t] = $(this).find("title").text(), o[t] = $(this).find("paragraph").text(), s[t] = $(this).find("icon").text(), t++
        });
        var r = a.length - 1,
          l = Math.floor(Math.random() * r);
        r < (n = l + 1) && (n = 0);
        r < (i = n + 1) && (i = 0);
        $("#title").text(a[l]), $("#title").addClass("text-center"), $("#content").append("<p>" + o[l] + "</p>"), $("#icon").addClass(s[l]), $("#title2").text(a[n]), $("#title2").addClass("text-center"), $("#content2").append("<p>" + o[n] + "</p>"), $("#icon2").addClass(s[n]), $("#title3").text(a[i]), $("#title3").addClass("text-center"), $("#content3").append("<p>" + o[i] + "</p>"), $("#icon3").addClass(s[i])
      },
      error: function () {
        console.log("Error: Something went wrong")
      }
    });
    var o = $("nav.navbar");
    $(window).scroll(function () {
      180 < $(this).scrollTop() ? (o.addClass("bg-gradient-light"), o.removeClass("bg-gradient-dark"), o.removeClass("navbar-dark"), o.addClass("navbar-light")) : (o.removeClass("bg-gradient-light"), o.addClass("bg-gradient-dark"), o.removeClass("navbar-light"), o.addClass("navbar-dark"))
    })
  }),
  function (s) {
    "use strict";
    s.fn.padAward = function () {
      var e = (s("#best-video").width() - s("#best-video").height()) / 2;
      s("#best-video").css("padding", e + "px 0")
    }, s.fn.padHeight = function () {
      var e = this[0],
        t = this.closest(".holder"),
        o = s(e).outerHeight(),
        a = (s(t).outerHeight() - o) / 2;
      s(e).css("margin-top", a + "px")
    }, s.fn.setHeight = function () {
      var e = 100;
      s(this).each(function () {
        s(this).height() > e && (e = s(this).height())
      }), s(this).height(e)
    }
  }(jQuery), $(document).ready(function () {
    switch ($(document).find("title").text()) {
      case "About Live Spokesperson":
        $("#about").addClass("active");
        break;
      case "Articles from Live-Spokesperson.com":
        $("#articles").addClass("active");
        break;
      case "Live Spokesperson Home":
        $("#home").addClass("active");
        break;
      case "Spokespeople by Live-Spokesperson.com":
        $("#spokespeople").addClass("active"), $("#spokesperson-main").addClass("active");
        break;
      case "Our Spokesmen|Live-Spokesperson":
        $("#spokespeople").addClass("active"), $("#spokesperson-men").addClass("active");
        break;
      case "Our Spokeswomen|Live-Spokesperson":
        $("#spokespeople").addClass("active"), $("#spokesperson-women").addClass("active");
        break;
      case "Specialty Spokespeople|Live-Spokesperson":
        $("#spokespeople").addClass("active"), $("#spokesperson-specialty").addClass("active");
        break;
      case "Website Spokesperson Examples":
        $("#spokespeople").addClass("active"), $("#spokesperson-examples").addClass("active");
        break;
      case "Website Spokesperson Software":
      case "Virtual Spokespeople by Live-Spokesperson":
        $("#spokespeople").addClass("active"), $("#spokesperson-software").addClass("active")
    }

    function o(e, t, o) {
      var a = e.outerHeight(),
        s = o.offset().top;
      t.scrollTop() >= s ? (o.height(a), e.addClass("affix")) : (e.removeClass("affix"), o.height("auto"))
    }
    $('[data-toggle="affix"]').each(function () {
      var e = $(this),
        t = $("<div></div>");
      e.before(t), $(window).on("scroll resize", function () {
        o(e, $(this), t)
      }), o(e, $(window), t)
    })
  });
var testimonialInc = 0;

function changeTestimonial() {
  $("#quote").text(testimonials[testimonialInc].quote).fadeOut("slow", function () {
    $(this).html(testimonials[testimonialInc].quote).fadeIn(500)
  }), $("#person").text(testimonials[testimonialInc].person).fadeOut("slow", function () {
    $(this).html(testimonials[testimonialInc].person).fadeIn(500)
  }), $("#company").text(testimonials[testimonialInc].company).fadeOut("slow", function () {
    $(this).html(testimonials[testimonialInc].company).fadeIn(500)
  }), $("#dash").fadeOut("slow").fadeIn(500), testimonialInc === testimonials.length - 1 ? testimonialInc = 0 : testimonialInc++
}
