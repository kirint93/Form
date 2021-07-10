<?php

if(isset($_POST['submit']))
if (!empty($_POST)){
  $to = "kirinthapar@yandex.com";
  $from = $_POST['email'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $phone = $_POST['phone'];
  $address1= $_POST['address1'];
  $address2= $_POST['address2'];
  $Town= $_POST['Town'];
  $County= $_POST['County'];
  $postcode= $_POST['postcode'];
  $subject = "Form submission";
  $subject2 = "Copy of your form submission";
  $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

  mail($from,$subject2,$message2);
  mail($to,$subject,$message);

  echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />

    <title>Form</title>
</head>
<body>
  <h1>Form</h1>
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact-form" >
        <section class="input-fields">
        <input type="text" name="firstName" aria-label=" First Name" placeholder=" First Name" required>
        <input type="text" name="LastName" aria-label=" Last Name" placeholder=" Last Name" required>
        <input type="text" name="emailAddress" aria-label=" Email Address" placeholder="Email Address" required>
        
        <input type="tel" name="phone" aria-label="phone number" placeholder="Phone Number">
        <input type="text" name="address1" aria-label="address1" placeholder="Address 1" required >
        <input type="text" name="address2" aria-label="address2" placeholder="Address 2" >
        <input type="text" name="Town" aria-label="Town" placeholder="Town">
        <input type="text" name="County" aria-label="County" placeholder="County">
        <input type="text" name="postcode" aria-label="postcode" placeholder="Postcode" required>
        </section>
        <section class="content">
         <textarea name="Description" aria-label="Description" required>Description</textarea>
          <input type="submit" value="Submit" class="button">  
        </section>
      </form> 
</body>
</html>