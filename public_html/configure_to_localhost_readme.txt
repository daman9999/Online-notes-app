configure to local server(localhost) to send mail to your email id

1) goto C:\xampp\php\php.ini
2) find extension=php_openssl.dll
3) remove the semicolon from the beginning

find [mail function]
change

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = my-gmail-id@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

Now Open C:\xampp\sendmail\sendmail.ini. Replace all the existing code in sendmail.ini with following code

[sendmail]

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=my-gmail-id@gmail.com
auth_password=my-gmail-password
force_sender=my-gmail-id@gmail.com

/* edit the database name in connection.php and connection2.php */
$link=mysqli_connect("serverName","your_username","your_password"); => in connection2.php 1st line
$link=mysqli_connect("serverName","your_username","your_password","databaseName"); => in connection2.php and connection.php line


////****/////
There is no need of making the tables in phpmyadmin if running on localhost we configured that for you just plug and play :)
happy coding :)

