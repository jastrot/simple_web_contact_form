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

    <form action="" method="post" id="form_users_input" class="flex_parent">    
        <h2>Please input user data below</h2>
        <div>
            <label for="first_name_input"> First Name:</label>
            <input type="text" name="first_name" id="first_name_input" alt="Input box requesting your first name." placeholder="Enter first name" required>
        </div>
        <div>
            <label for="last_name_input">Last Name:</label>
            <input type="text" name="last_name" id="last_name_input" alt="Input box requesting your last name." placeholder="Enter last name" required>
        </div>
        <div>
            <label for="email_input">Email Address:</label>
            <input type="email" name="email" id="email_input" alt="Input box requesting your email address." placeholder="Enter email address" required>
        </div>
        <div>
            <label for="phone_number_input">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone_number_input" alt="Input box requesting your phone number to be entered with no dashes, spaces, or parenthesis" placeholder="Enter telephone number" required>
        </div>
        <div>
            <label for="phone_extension_input">Extension:</label>
            <input type="number" name="phone_extension" id="phone_extension_input" alt="Enter Phone Number Extension, if applicable." placeholder="Enter extension, if applicable">
        </div>
        <div>
            <label for="issue_classification_dropdown">Classification:</label>
            <select name="issue_classification" id="issue_classification_dropdown">
                <option value="1" alt="Classified as Query" default>Query</option>
                <option value="2" alt="Classified as Feedback">Feedback</option>
                <option value="3" alt="Classified as Complaint">Complaint</option>
                <option value="4" alt="Classified as Other">Other</option>
            </select>
        </div>
        <div class="flex_parent">
            <label for="user_comment_textarea">Please Enter your comments:</label>
            <textarea name="user_comment" id="user_comment_textarea" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" alt="Button that will send info to webserver">SUBMIT</button>
    </form>

</body>
</html>