<?php
    // Initialize the session
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
 
  

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../header.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="database.js"></script>
  <link rel="icon" href="Billeder/PenisAvatar.jpg" type="image/gif" sizes="16x16">

<body>
    <!-- Header -->
    <div class="topnav">
      <a href="../Forside/index.html">Forside</a>
      <a href="../BesogOs/index.html">Besøg os</a>
      <a href="../Deltag/index.html">Deltag</a>
      <a class="active" href="../StotOs/index.html">Støt os</a>
      <a href="../OmOs/index.html">Om os</a>
      <a href="../Uddannelse/index.html">Uddannelse</a>

      <a href="../Donation/index.html">Donation</a>
      <a href="../Lokation/index.html">Lokation</a>
      <div class="logotop">
      </div>
    </div>


    <form action="action_page.php" method="post" enctype="multipart/form-data">
      <div class="container">
        <h2>Abonnér på vores nyhedsbrev!</h2>
        <p>Månedlige mails der kan afmeldes på et sekund</p>
      </div>
    
      <div class="container" style="background-color:white">
        <input id="name" type="text" placeholder="Navn" name="name">
        <input id="mail" type="email" placeholder="Email" name="mail">
        <label>
          <!-- <input type="checkbox" checked="checked" name="offer"> Modtag også Tilbud! -->
        </label>
      </div>
    
      <div class="container">
        <input type="submit" value="Submit">
      </div>
    </form>
</body>

</html>