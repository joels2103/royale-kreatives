<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';


if (
		isset($_POST['nameVal'], $_POST['emailVal'], $_POST['subjectVal'], $_POST['messageVal'], $_POST['phoneVal'],$_POST['budgetVal'],$_POST['eventDateVal'], $_POST['locationVal']) &&
		!empty($_POST['nameVal']) && 
		!empty($_POST['emailVal']) && 
		!empty($_POST['subjectVal']) && 
		!empty($_POST['messageVal']) && 
		!empty($_POST['phoneVal']) && 
		!empty($_POST['budgetVal']) && 
		!empty($_POST['eventDateVal']) && 
		!empty($_POST['locationVal'])
	) {


				//send email
		/* Subject & Email Variables */
		$subject = 'Feedback Information';
		
		/* Mail Form Contents */
		$name = $_POST['nameVal'];
		$emailAddress = $_POST['emailVal'];
		$subject1 = $_POST['subjectVal'];
		$message = $_POST['messageVal'];
		$budget = $_POST['budgetVal'];	
		$phone = $_POST['phoneVal'];
		$location = $_POST['locationVal'];	
		$eventDate = $_POST['eventDateVal'];	

		

$date = DateTime::createFromFormat('Y-m-d', $eventDate);
$formattedDate = $date->format('d-m-Y'); // Day-Month-Year format



		date_default_timezone_set('America/Toronto');
        $mydateAndTime=date("d-m-Y H:i:sa");	

		// To send the HTML mail we need to set the Content-type header.			
		$messageNew = "<b>Name</b>      : " .$name."<br/>".
		"<b>Event Type</b>   : " .$subject1."<br/>".
		"<b>Email ID</b>     : " .$emailAddress."<br/>".	
		"<b>Phone Number</b>     : " .$phone."<br/>".	
		"<b>Event Location</b>     : " .$location."<br/>".		
		"<b>Event Date</b>     : " .$formattedDate."<br/>".	
		"<b>Budget in Dollars</b>     : " .$budget."<br/>".		
		"<b>Message</b>   : " .$message."<br/>";	

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'royalekreativesweb@gmail.com'; // Your Gmail
    $mail->Password = 'tvrw sucl apok wcek'; // App Password from Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('royalekreativesweb@gmail.com', 'Royale Kreatives');
    $mail->addAddress('royalekreatives@outlook.com'); // Recipient
    $mail->addReplyTo('royalekreativesweb@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Event Booking Inquiry -'. $mydateAndTime; 
    $mail->Body    = $messageNew;

     if (!$mail->send()) {
    
    echo '<script>
        alert("Mailer Error: ' . $mail->ErrorInfo . '");
        window.location.href = "../index.html";
    </script>';
   } else {
   
    echo '<script>alert("Thank you for contacting us. One of our representatives will be in touch with you soon..");</script>';
       echo '<script>window.location.href = "../index.html";</script>';
   }
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
	}
	else{
		echo "Thank You for taking your precious time to have visited our website." . "\n" . "All the required fields needs to be entered";
	}
		
?>
