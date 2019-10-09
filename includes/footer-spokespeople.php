<?php include("../includes/footer.php"); ?>
<script>
$(document).ready(function () {
	var sTitle = $(document).find("title").text();
    console.log( sTitle );
    switch(sTitle){
        case "Spokespeople by Live-Spokesperson.com":
            $("#spokesperson-main a").addClass("disabled");
            break;
        case "Our Spokesmen|Live-Spokesperson":
            $("#spokesperson-men a").addClass("disabled");
            break;
        case "Our Spokeswomen|Live-Spokesperson":
            $("#spokesperson-women a").addClass("disabled");
            break;
        case "Specialty Spokespeople|Live-Spokesperson":
            $("#spokesperson-specialty a").addClass("disabled");
            break;
        case "Website Spokesperson Examples":
            $("#spokesperson-examples a").addClass("disabled");
            break;
        case "Website Spokesperson Software":
            $("#spokesperson-software a").addClass("disabled");
            break;
        default:
            break;
    }
	});
</script>