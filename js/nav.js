// JavaScript Document
$(document).ready(function(){
	var title = $(document).find("title").text();
	console.log( title );
	if(title.indexOf("About")>-1){
		$('#about').addClass("active");
	}else if(title.indexOf("Styles")>-1){
		$('#styles').addClass("active");
	}else if(title.indexOf("Spokespeople")>-1){
		$('#spokespeople').addClass("active");
	}else{
		$('#home').addClass("active");
	}
})