<?php
	if(isset($_POST['Name']) && isset($_POST['Email'])){
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$comment=$_POST['Comment'];
	//send mail 
	 $to='jd.franco.caballero@gmail.com';
	 $subject=$_POST['Subject'];
	 $body='<html>
	 <body>
	 <h3>Feedback</h3>
	 <hr>

	 <p> Name : '.$name.'</p>
	 <br>

	 <p> Email : '.$email.'</p>
	 
	 <p> '.$comment.'</p>

	 </body>

	 </html>';

	 $headers  ="From:".$name."<".$email.">\r\n";
	 $headers .="reply-To:".$email."\r\n";
	 $headers .="NINE-Version: 1.0\r\n";
	 $headers .="Content-type: text/html; charset=utf-8";


	//confirmation mail
	 $user=$email;
	 $usersubject = "Email confirmation";
	 $userheaders = "From: Juan Franco, jd.franco.caballero@gmail.com";
	 $usermessage = "Thank you for contacting me, I will reply shortly.";


	//sending process
	 $send=mail($to, $subject, $body, $headers);
	 $confirm=mail($user, $usersubject, $userheaders,$usermessage );

	 if($send && $confirm){
	  echo "success";
	 }

	 else{
	  echo "Failed";
	 }

	}
	?>