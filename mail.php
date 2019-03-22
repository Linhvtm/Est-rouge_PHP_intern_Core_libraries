<?php

/**
 * We can use email in PHP by using sendmail and the smtp server of any of your mail accounts (gmail, yahoo, hotmail, ETC).
 * Folowing these step to set up in your local project
 * 1. Download sendmail from link: http://www.developerfiles.com/wp-content/uploads/2012/05/sendmail.zip
 * or you can use sendmail package in your xammpp.
 * Extract to C:\sendmail.
 *
 * 2.  Configure sendmail.ini
 * smtp_server=smtp.gmail.com
 * smtp_port=587
 * auth_username=your_address@gmail.com
 * auth_password=your_password
 * force_sender=your_address@gmail.com
 *
 * 3. Configure php.ini
 * sendmail_path = "C:\sendmail\sendmail.exe -t"
 *
 * 4. Test it like below
 */
if (mail('vanmylink@gmail.com', 'English', 'I am trying to test something cool')) {
    echo 'Mail Sent Successfully';
} else {
    echo 'Mail Not Sent';
}
