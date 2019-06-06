<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Live Spokesperson Testimonials</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="Custom Video,Website Video,Video Presentation,Animation,Custom Illustration,Whiteboard Video,Explainer Video" name="keywords">
    <meta content="Learn about Live-Spokesperson.com  From a simple and quick message to Product Demonstrations, Website Walk-throughs, Training, or Sales. " name="description">
    <meta content="index, follow" name="robots">
    <!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
    <meta content="30 days" name="revisit-after">
    <meta content="global" name="distribution">
    <meta content="general" name="rating">
    <meta content="english" name="Content-Language">
    <meta content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8=" name="verify-v1">
    <meta content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" name="norton-safeweb-site-verification">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <?php include("../includes/head.php"); ?>
</head>

<body>
    <?php include("../includes/nav.php"); ?>
    <section class="alert alert-info">
        <?php include ('includes/testimonials-random.php'); ?>
        <h2 class="text-center">Testimonials</h2>
        <div class="row">
            <div class="col-lg-11">
                <p id="quote" class="text-justify"></p>
                <h3 class="text-right"><span id="person"></span> - <span id="company"></span></h3>

            </div>
            <div class="col-lg-1">
                <i class="far fa-comment" id="speech-bubble"></i>
            </div>
        </div>
    </section>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/modal.php");?>
    <script>
        $( document ).ready( function () {
            $( "#quote" ).text( testimonials[ 0 ].quote );
            $( "#person" ).text( testimonials[ 0 ].person );
            $( "#company" ).text( testimonials[ 0 ].company );
        } );
    </script>
</body>
</html>