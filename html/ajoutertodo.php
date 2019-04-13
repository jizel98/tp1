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
            <a href="connexion.html">
            <input type="button" class="btn btn-primary btn-lg" value="déconnexion" onclick="JSfunction()"
            <button></button> </a>
            <br>
            <a href="home.html">
                  <input type="button" class="btn btn-primary btn-lg" value="acceuil" onclick="JSfunction()"
            <button> </button> </a><br>
            <h4>Description</h4>
            <textarea rows="10"cols="15"> Text... </textarea>
      <br>
      <input type="button" class="btn btn-success" value="ajouter" onclick="JSfunction()"
         <button></button>
         <input type="button" class="btn btn-danger" value="effacer" onclick="JSfunction()"
         <button></button>
    </body>
</html>
