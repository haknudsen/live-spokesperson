// JavaScript Document

$(document).ready(function () {
    $.ajax({
        url: "http://seovideoexperts.com/wp-json/wp/v2/posts?per_page=1",
        success: function (result) {
            var excerpt = result[0].excerpt.rendered;
			var link = result[0].link;
            var linkStart = '[&hellip;]';
            var theLink = '<a href="' + link + '">[&hellip;]</a>';
            var excerptLink = excerpt.replace(linkStart, theLink);
			var linkOpen= '<a href="' + link + '">';
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
});
