<?php if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit-form'])) {
  
// Fetching variables of the form which travels in URL
    $first_name = secure_input($_POST["first-name"]);
    $last_name = secure_input($_POST["last-name"]);
    $email = secure_input($_POST["email"]);
    $phone = secure_input($_POST["phone"]);
    $subject = secure_input($_POST["subject"]);
    $message = secure_input($_POST["message"]);
    $communicate = secure_input($_POST["com"]);
    $news = secure_input($_POST["news"]);
//  Are all required fields filled in?
if($first_name !=''&& $last_name !=''&& $email !=''&& $subject !=''&& $message !='') {
  
//  If yes, send the confirmation email
$to      = 'toteepee@gmail.com';
$mail_subject = $subject;
$mail_message = "";
foreach( $_POST as $key => $value ) {
$mail_message.= "$key: $value\n";
}
  
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $mail_subject, $mail_message, $headers);
    //  And  redirect the form from redirectphp back to the original page   
    $previous = htmlspecialchars($_SERVER['HTTP_REFERER'])."?status=\"submited\"";
    header("Location:$previous");

//  If no, prompt user 
 } else{ ?>
   <span><?php echo "Please fill all required fields.....!!!!!!!!!!!!"; ?></span> 
   <?php 
     }
     
  }



function secure_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>