<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articles from Live-Spokesperson.com</title>
	<meta name="title" content="Articles from Live-Spokesperson.com">
	<meta name="description" content="Searching for a new way to bring life to your website and attract more interest from those who visit it? Get a spokesperson from Live-Spokesperson.">
	<meta name="keywords" content="Video Spokesperson,Website Spokesperson,Online Marketing Video Production,Hire A Spokesperson,Website Video Spokesperson,Video Spokesperson Software,Your Video Spokesperson,Live Spokesperson">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="30 days">
	<meta name="author" content="TalkingHeads.com">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php include("../includes/head.php"); ?>
</head>

<body>
	<?php include("../includes/nav.php"); ?>
	<section class="jumbotron">
			<div class="card-group">
				<?php
				$path = getcwd();
				$dirs = array();
				$dir = dir( $path );
				while ( false !== ( $entry = $dir->read() ) ) {
					if ( $entry != '.' && $entry != '..' ) {
						if ( is_dir( $path . '/' . $entry ) ) {
							$dirs[] = $entry;
							$link = $entry;
							$title = str_replace( "-", " ", $link );
							$html = file_get_contents( $link . "/index.php" );
							$start = strpos( $html, '<p>' );
							$end = strpos( $html, '</p>', $start );
							$paragraph = substr( $html, $start, $end - $start + 4 );
							echo( '
            <div class="card text-white bg-primary mb-3">
				<h3 class="card-header bg-gradient-primary text-capitalize">' . $title . '</h3>
				<div class="card-body">
					<p class="card-text">' . $paragraph . '</p>
				</div>
				<div class="card-footer bg-gradient-mine">
					<a href="' . $link . '" class="card-link float-right">Continue...</a>
				</div>
			</div>' );


						}
					}
				}
				?>
	</section>

	<section class="alert-info">
		<div class="container">
		</div>
	</section>

	<?php include("../includes/footer.php"); ?>
	<?php include("../includes/modal.php"); ?>
</body>
</html>