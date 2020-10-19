<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" language="javascript" type="text/javascript"></script>
    <title>UIXHAUS | UX UI DESIGN</title>
</head>
<body>
    <div class="logo">
         <img src="assets/uixhaus-logo.svg" alt="uixhaus logo" class="uixhaus">
    </div>

<!-- contenedor flexbox -->
<!-- titulo -->
<div class="container">
<h1 class="title"> LAUNCH <span class="party">PARTY</span><span class="dot">.</span> </h1>

<!--ticket-->
<div class="wrapper">
  
    <div class="profile">
      <div class="profile-photo">
        <img class="photo-img" src="https://i.ibb.co/cXn9cWy/ticket-12.jpg" alt="uixhaus event ticket">
        <div class="photo-button"></div>
      </div>
      <div class="allImage">
    </div>
    </div>
    </div>

    

</div> <!--esto cierra el contenedor-->
<!-- fin del contenedor -->

<h2 class="event">EVENTO ONLINE</h2>
<p class="registration">Te podemos recordar la fecha y además te mandamos un regalito!</p>

<!-- formulario -->
<form action="form.php" class="mail" method="post">
<input type="text" name="mail" placeholder="Dejanos tu mail por favor" required class="mail">
<br>
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
<button class="button button--moema" type="submit">ENVIAR</button>
</form>

<p class="follow">También podes seguirnos en nuestras redes para no perderte de nada</p>

<!--redes sociales-->
<div class="containerRRSS">
<a href="https://twitter.com/uixhaus"><img class="rrss" src="assets/twitter-uixhaus.svg" alt="UIXHAUS Twitter"></a>
<a href="https://instagram.com/uixhaus"><img class="rrss" src="assets/instagram-uixhaus.svg" alt="UIXHAUS Instagram"></a>
<a href="https://linkedin.com/uixhaus"><img class="rrss" src="assets/linkedin-uixhaus.svg" alt="UIXHAUS Linkedin"></a>
<a href="https://twitch.tv/uixhaus"><img class="rrss" src="assets/twitch-uixhaus.svg" alt="Twitch"></a>
</div>

</body>
</html>



