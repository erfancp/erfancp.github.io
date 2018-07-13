<? 
/*
             ---     Created by Adam Khoury @ www.developphp.com      ---

*/
// Create local variables from the Flash ActionScript posted variables
$senderName   = $_POST['userName'];
$senderEmail     = $_POST['userEmail'];
$senderMessage = $_POST['userMsg'];

// Strip slashes on the Local variables for security
$senderName   = stripslashes($senderName);
$senderEmail     = stripslashes($senderEmail);
$senderMessage   = stripslashes($senderMessage); 

// IMPORTANT - Change these lines to be appropriate for your needs - IMPORTANT
$to = "erfancomputerpouya@gmail.com";			 
$from = "$senderEmail";
$subject = "Contact from your site";
// Modify the Body of the message however you like
$message = "Message from your website:

Their Name:   $senderName 

Their Email:   $senderEmail

Their Message is below: 

$senderMessage";
// Build $headers Variable
$headers = "From: $from\r\n";
$headers .= "Content-type: text\r\n"; 
$to = "$to";
    // Send the email
    mail($to, $subject, $message, $headers);
	
	// Assemble the message that goes back to Flash
	// The flash ActionScript is looking for a return variable of "return_msg"
	$my_msg = "Thanks $senderName, your message has been sent.";
	// Print the data back to flash who is patiently waiting for it in the onCompleteHandler
    print "return_msg=$my_msg"; 
// Exit script	
exit();
?>