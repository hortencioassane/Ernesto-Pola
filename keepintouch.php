

<?php

@include 'config.php';

?>


<!DOCTYPE html>
<html>

<head>

<title> 
  ERNESTO POLA
</title>

<link rel="icon" href="icons/log.jpg" type="imagem/x-icon">



<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="keepintouch.css">
<link rel="stylesheet" href="ernesto.css">

<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.
gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" 
rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device=widht, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<link rel="stylesheet" href="css/style.css">
</head>


<body>




  <?php include 'header.php';?>

<div class="sidebar">

  <a href="https://www.facebook.com/ErnestoPolaArt" target="blank">
<div class="sidebar-link"> <img class="home" src="icons/facebook.png"></a>
  <div>Facebook</div>
</div>

<a href="https://www.facebook.com" target="blank">
<div class="sidebar-link"> <img class="explore" src="icons/instagram.png"></a>
  <div>Instagram</div>
</div>
<a href="https://www.facebook.com" target="blank">
<div class="sidebar-link">  <img class="subscriptions" src="icons/twitter.png"></a>
  <div>Twitter</div>
</div>
<a href="https://youtube.com/@ernestopola331" target="blank">
<div class="sidebar-link"> <img class="email" src="icons/youtubee.png"></a>
  <div>Youtube</div></div>

  <a href="https://wa.me/25852848390?text=Hello%2C%20I%20have%20go%20a%20question%20about%20the%20paintings" target="blank">
  <div class="sidebar-link">  <img class="youtube-music" src="icons/whatsapp.png"></a>
    <div>Whatsapp</div>
  </div>

</div>


<section class="contact">
  <div class="content">
    <h2>Keep In Touch</h2>

    <p>For interractig with me, fill the bellow spaces, please!
    </p>

  </div>


  <div class="container">
    <div class="contactinfo">
      <div class="box">

     <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i> 
    </div>
<div class="text">
<h3>Address</h3>
<p>Santagua A Slum<br> Rua 4035</p>

</div>
</div>


<div class="box">
  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
  </div>
    
<div class="text">
<h3>Phone</h3>
<p> +258 852848390</p>

</div>
</div>

<div class="box">
  <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
</div>

    <div class="text">
<h3>Email</h3>
<p>bhortencioassane@gmail.com</p>


</div>
</div>
</div>


<div class="contactform">

  <form action="mail.php" method="POST" autocomplete="off">

    <h2>Send Message</h2>
    <div class="inputBox">
<input type="text"  name="name"  class="input" required/>

<span>Full Name</span>


    </div>

    <div class="inputBox">
      <input type="email" name="Email"  class="input" required />
      
      <span>Email</span>
      
          </div>


          <div class="inputBox">
            <textarea name="Message"  class="input" required></textarea>
            
            <span>Type Your Message</span>
          </div>

          <div class="inputBox">
            <input type="submit" name="submit" value="Send" class="btn" />
          
          </div>
  </form>

  


</div>
</div>


  </section>



  <script src="https://smtpjs.com/v3/smtp.js"></script>

  


  
  <br>
  <br>

<div class="credit"> 
  
  <div class="right-section1">
    
    
    
    <a class="Pola"> 
      © 2023 Ernesto Polá. Designed by Billy
    </a>
    
    <a href="https://api.whatsapp.com/send?phone=842211619&text=Conversar%20Com%20Billy" target="blank">


    <div class="Apps">
      <img class="whatsapp1" src="icons/whatsapp.png"></a>
      

    </div>

    <a href="https://www.facebook.com/HortencioHassane?mibextid=ZbWKwL" target="blank">
    <div class="Apps">
      <img class="facebook1" src="icons/facebook.png"></a>
      
    
    </div>
  
    <a href="http://www.instagram.com/billyhortenciohassan" target="blank">
    <div class="Apps">
      <img class="intagram1" src="icons/instagram.png"></a>
      

      <script src="js/script.js"></script>


      <script src="app.js"></script>

</body>


</html>