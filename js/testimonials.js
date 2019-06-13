var testimonialInc = 0;

function changeTestimonial() {
	$("#quote").text(testimonials[testimonialInc].quote).fadeOut("slow", function () {
		$(this).html(testimonials[testimonialInc].quote).fadeIn(500)
	}), $("#person").text(testimonials[testimonialInc].person).fadeOut("slow", function () {
		$(this).html(testimonials[testimonialInc].person).fadeIn(500)
	}), $("#company").text(testimonials[testimonialInc].company).fadeOut("slow", function () {
		$(this).html(testimonials[testimonialInc].company).fadeIn(500)
	}), $("#dash").fadeOut("slow").fadeIn(500)
	}), testimonialInc === testimonials.length - 1 ? testimonialInc = 0 : testimonialInc++
}
