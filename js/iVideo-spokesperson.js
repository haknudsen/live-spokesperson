// JavaScript Document
	$( document ).ready( function () {
		var holder  = $( "#talking-heads-video_html5_api" );
		holder.width("540px");
		holder.height("360px");
		var video = $( "#talking-heads-video_html5_api" )[ 0 ];
		var srcBase = "https://www.websitetalkingheads.com/";
		var name, alt;
		$( ".poster" ).click( function () {
			name = $( this ).attr( "data-video" );
			console.log( "this=" + this );
			srcVideo = srcBase + "videos/" + name + ".mp4";
			if ( !$( this ).attr( "alt" ) ) {
				alt = "";
			} else {
				alt = " - " + $( this ).attr( "alt" );
			}
			$( '#videoModalLabel' ).text( name + alt );
			video.pause();
			video.src = srcVideo;
			video.play();
		} );
		$( '#contact' ).click( function () {
			console.log( "click" );
			video[ video.paused ? 'play' : 'pause' ]();
			var outside = $( '.modal-content' ).innerWidth();
			var width = outside / 2;
			if ( width < 440 ) {
				width = 440
			}
			$( '#form' ).outerWidth( width );
			$( '#form' ).toggleClass( 'd-block' );
			var left = ( outside - $( '#form' ).outerWidth() ) / 2;
			$( '#form' ).css( 'left', left );
		} );
		$( '#contactClose' ).click( function () {
			$( '#form' ).toggleClass( 'd-block' );
		} )
		$( '#mainModal' ).on( 'hidden.bs.modal', function ( e ) {
			video.pause();
		} );
		$( '#mainModal' ).on( 'shown.bs.modal', function ( e ) {
			$( '#form' ).removeClass( 'd-block' );
			video.play();
			console.log( name );
		} );
	} );