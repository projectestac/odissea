#XTEC Mailer library

Mailer library that sends mails through a private WebService

##Requeriments
- have enabled the PHP SOAP library

##Working with the library

new mailsender -> add_message -> send_mail

###Basic example to use this class:
```php
include ('mailsender.class.php');
$sender  = new mailsender('XTECBLOCS', 'xtecblocs-noreply@xtec.cat', 'educacio', 'INT', true);
$to      = array('manuel.martinez.ortega@atsistemas.com');
$subject = 'Tester for the mail sender';
$body    = 'Testing the mailserder.class.php v.1';
$sender->add_message( $to, $cc, $bcc, $subject, $body);
$sender->send_mail();
```
