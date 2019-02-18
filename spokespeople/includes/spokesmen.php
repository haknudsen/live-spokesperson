<?php
// displays all the file nodes
if(!$xml=simplexml_load_file('https://www.websitetalkingheads.com/spokespeople/maleactors.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
foreach($xml as $item){
	$actor = $item['caption'];
    echo '<div class="col-sm-2 actor" title="'.$actor.' - Video Spokesperson" data-actor="'.$actor.'">';
    echo PHP_EOL;
    echo '<i class="far fa-play-circle thumb-wrapper"></i>';
    echo PHP_EOL;
    echo '<div class="overlay img-circle"></div>';
    echo PHP_EOL;
    echo '<img src="https://www.websitetalkingheads.com/carimages/'.$actor.'.png" class="img-responsive img-circle" alt="'.$actor.' - Video Spokesperson"/></a>';
    echo PHP_EOL;
    echo '<h3 class="text-center" title="'.$actor.' - Video Spokesperson">'.$actor.'</h3>';
    echo PHP_EOL;
    echo '</div>';
    echo PHP_EOL;
}
?>