<?php		
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
		
		$subject = "Event Booking Inquiry -". $mydateAndTime;       
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$headers .= "mailed-by: royalekreatives@outlook.com";
		$headers .= "return-Path: royalekreatives@outlook.com";
		$headers .= "signed-by: royalekreatives@outlook.com";
		$headers .= "From: ".$name. "\r\n" . 
		"Reply-To: royalekreatives@outlook.com" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
		$email = "royalekreatives@outlook.com";
		$sent = mail($email, $subject, $messageNew, $headers, $emailAddress) ; 
		echo $sent;
		if ($sent) {
			echo '<script>alert("Thank you for contacting us. One of our representatives will be in touch with you soon..");</script>';
			echo '<script>window.location.href = "../index.html";</script>';	 																	
		}			
	}
	else{
		echo "Thank You for taking your precious time to have visited our website." . "\n" . "All the required fields needs to be entered";
	}
?>