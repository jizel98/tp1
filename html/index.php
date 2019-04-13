<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
    <?php
            
            $link = mysql_connect("localhost", "root", "")
                or die("Impossible de se connecter : " . mysql_error());
            echo 'Connexion réussie';
            mysql_close($link);
            ?>
            <img src="../images/logo.jpg"  width=150" height=150px "alt="logo">
            <br>
            <a href="inscription.html"> <input type="button" class="btn btn-primary btn-lg" value="inscription" onclick="JSfunction()"
      <button></button> </a>
      <br>
          <a href="connexion.html"> <input type="button" class="btn btn-primary btn-lg" value="connexion" onclick="JSfunction()"
      <button> </button> </a>
      <p>IHEC Carthage est une université publique sous la tutelle du Rectorat de Carthage.</p>  
<br>
<div class="text-center">
<img src="../images/69-p.jpg" class="img-thumbnail" alt="photo">
</div>
    </body>
</html>
