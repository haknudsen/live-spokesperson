<?php
/*variables available
$actor-video video
$alt- alt tag contents
#bgColor-background color
 */

if ( !$alt ) {
	$alt = "Website Spokesperson";
}
$bgColor = "transparent";

if ( !$btnColor ) {
	$btnColor = "#0072FF";
}
echo PHP_EOL;
echo '<div style="background:' . $bgColor . ';padding:1px">';
echo '<div class="actor" data-toggle="modal" data-target=".modal-spokesperson" data-video="' . $actor . '">';
echo PHP_EOL;
echo '<i class="far fa-play-circle thumb-wrapper"></i>';
echo PHP_EOL;
echo '<img src="https://www.websitetalkingheads.com/carimages/' . $actor . '.png" width=160 height=180 alt="' . $alt . '">';
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;
echo '<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "VideoObject",
		"name": "' . $actor . '",
		"description": "' . $alt . '",
		"thumbnailUrl": "https://www.websitetalkingheads.com/carimages/' . $actor . '.png",
		"uploadDate": "2018-11-31T08:00:00+08:00",
		"duration": "PT1M54S",
		"publisher": {
			"@type": "Organization",
			"name": "Website Talking Heads",
			"logo": {
				"@type": "ImageObject",
				"url": "https://www.websitetalkingheads.com/images/Talking_Heads_Banner_Logo.png",
				"width": 247,
				"height": 100
			}
		},
		"contentUrl": "https://www.websitetalkingheads.com/videos/' . $actor . '.mp4",
		"embedUrl": "https://www.websitetalkingheads.com/videos/' . $actor . '",
		"interactionCount": "7018"
	}
</script>
';

?>