<?php
              
if(isset($_POST['form_mail']))
{
$mail=$_POST['form_mail'];
$fp = fopen('mails.txt', 'a');
fwrite($fp, $mail);
fwrite($fp, "\n");
fclose($fp);
}
?>