/*
 * JavaScript file to submit the contact form
 */

$( '#contactForm' ).on( 'valid', function() {

	var name = $( '#contactName' ).val();
	var email = $( '#contactEmail' ).val();
	var reason = $( '#messageSubject' ).val();
	var content = $( '#messageContent' ).val();

	// Data for response
	var dataString = 'name=' + name +
					'&email=' + email +
					'&subject=' + reason + 
					'&message=' + message;

	// Begin Ajax call
	$.ajax( {
		type: "POST",
		url: "../../contact.php",
		data: dataString,
		success: function() {
			$( '.contactform' ).html( "<div id='thanks'></div>" );
				$( '#thanks' ).html( "<h2>Thanks!</h2>" )
				.append( "<p>Thank you for your email. We will read your message and contact you if necessary.</p>" )
				.hide()
				.fadeIn( 1500 );
		},

	}); // END Ajax
});