<?php  // create table
require_once("config.php");

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit-form'])) {
  
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


$firstname = $conn->real_escape_string($_POST['first-name']);
$lastname = $conn->real_escape_string($_POST['last-name']);
$email= $conn->real_escape_string($_POST['email']);
$subj= $conn->real_escape_string($_POST['subj']);
$msg = $conn->real_escape_string($_POST['message']);
$news= $conn->real_escape_string($_POST['news']);

$sql="INSERT INTO tp_MyGuests (firstname, lastname, email, subj, msg, news) VALUES ('$firstname', '$lastname', '$email', '$subj', '$msg', '$news')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
//   $sql = "SELECT id, firstname, lastname FROM tp_MyGuests";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

$sql = "SELECT id  FROM tp_MyGuests WHERE lastname='$lastname' AND msg='$msg'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $currentID = $row["id"];
    }
} else {
    echo "0 results";
}
// echo "Thank you! We will contact you soon";
  // And  redirect the form from "redirect.php" back to the original page   
    $previous = htmlspecialchars($_SERVER['HTTP_REFERER'])."?id=$currentID";

  header("Location:$previous");
}

 } else{ ?>
   <span><?php echo "Please fill all required fields.....!!!!!!!!!!!!"; ?></span> 
   <?php 
     }  
  }

 ?>


<?php
function secure_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>