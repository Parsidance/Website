<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From:'+$email; 
    $to = 'jens.delannoy@scoutsrumbeke.be'; 
    $subject = 'Vraag Parsidance';
    $human = $_POST['human'];
			
    $body = "From: $name\n\n E-Mail: $email\n\n Message:\n\n $message";
				
    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}?>