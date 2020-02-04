<!DOCTYPE html>
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">

</head>
<body>
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

// header("Location:$previous");
echo "Thank you for contacting us!";



}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
echo htmlspecialchars($_SERVER["PHP_SELF"])."?status=\"submited\"";

?>

<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
<br>
<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']);?>
<br>
<?php echo $_POST; ?>
<br>
<div class="main">
<div class="first">
<h2>Redirect Form To a Particular Page On Submit using PHP</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="#form" method="post" name="my-form">
<label>Name :</label>
<input id="name" name="name" placeholder='Your Name' type='text'>
<label>Email :</label>
<input id="email" name="email" placeholder='Valid Email Address' type='text'>
<label>Contact :</label>
<input id="contact" name="contact" placeholder='Contact' type='text'>
<label>Address:</label>
<input id="address" name="address" placeholder='Address' type='text' value="">
<input id='btn' name="submit" type='submit' value='Submit'>
<!---- Including PHP File Here ---->


</form>
</div>
</div>
</body>
</html>