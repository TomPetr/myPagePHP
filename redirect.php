<?php if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''&& $email !=''&& $contact !=''&& $address !='')
{
//  To redirect form on a particular page
$previous = htmlspecialchars($_SERVER['HTTP_REFERER'])."?status=\"submited\"";;
$current = htmlspecialchars($_SERVER["PHP_SELF"])."?status=\"submited\"";
$to      = 'toteepee@gmail.com';
$subject = 'From myPage\'s visitor';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location:$previous");



}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
echo htmlspecialchars($_SERVER["PHP_SELF"])."?status=\"submited\"";

?>