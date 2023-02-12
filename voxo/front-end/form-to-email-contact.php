<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	//echo "error; you need to submit the form!";
}
$visitor_firstname = $_POST['firstname'];
$visitor_lastname = $_POST['lastname'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$visitor_comment = $_POST['comment'];

//Validate first
// if(empty($visitor_email)) 
// {
//     echo "Name and email are mandatory!";
//     exit;
// }

if(IsInjected($visitor_email))
{
    //echo "Bad email value!";
    exit;
}

$email_from = 'odishiagro@gmail.com';//<== update the email address
$email_subject = "$visitor_email"; 
$email_body = "სახელი და გვარი: $visitor_firstname $visitor_lastname.\nტელეფონი: $visitor_phone.\nკომენტარი: $visitor_comment.";
    
$to = "gaga9393@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.php');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 