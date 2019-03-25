<?php

/**
 * We can use email in PHP by using sendmail and the smtp server of any of your mail accounts
 * (gmail, yahoo, hotmail, ETC).
 * 1. Download sendmail from link: http://www.developerfiles.com/wp-content/uploads/2012/05/sendmail.zip
 * or you can use sendmail package in your xammpp.
 *
 * 2.  Configure sendmail.ini
 * smtp_server=smtp.gmail.com
 * smtp_port=587
 * auth_username=your_address@gmail.com
 * auth_password=your_password
 *
 * 3. Configure php.ini
 * sendmail_path = "C:\sendmail\sendmail.exe -t"
 *
 * 4. Test it like below
 *
 * if (mail('vanmylink@gmail.com', 'English', 'I am trying to test something cool')) {
 *  echo 'Mail Sent Successfully';
 * } else {
 *   echo 'Mail Not Sent';
 * }
 */

 // example using filter_var() function
function sanitize_my_email($field)
{
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'name1111@company.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail ';
$headers = 'From: noreply @ company. com';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo 'Invalid input';
} else {
    //send email
    mail($to_email, $subject, $message, $headers);
    echo 'This email is sent using PHP Mail';
}
