<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Contact Form</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <form action="" method="post" id="form_users_input">    
        <input type="text" name="first_name" id="first_name_input" alt="Input box requesting your first name." placeholder="Enter first name">
        <input type="text" name="last_name" id="last_name_input" alt="Input box requesting your last name." placeholder="Enter last name">
        <input type="email" name="email" id="email_input" alt="Input box requesting your email address." placeholder="Enter email address">
        <input type="tel" name="phone_number" id="phone_number_input" alt="Input box requesting your phone number to be entered with no dashes, spaces, or parenthesis" placeholder="Enter telephone number">
        <input type="number" name="phone_extension" id="phone_extension_input" alt="Enter Phone Number Extension, if applicable." placeholder="Enter extension, if applicable">
        <button type="submit" alt="Button that will send info to webserver">SUBMIT</button>
    </form>

</body>
</html>