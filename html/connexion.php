<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
    <style>
* {
   background-color: blue; 
}
  </style>
    <?php
            
            $link = mysql_connect("localhost", "root", "")
                or die("Impossible de se connecter : " . mysql_error());
            echo 'Connexion réussie';
            mysql_close($link);
            ?>
            <img src="../images/logo.jpg"  width=150" height=150px "alt="logo">
            <br>
            <a href="inscription.php">
            <input type="button" class="btn btn-primary btn-lg" value="inscription" onclick="JSfunction()"
            <button></button> </a>
            <br>
            <a href="index.php">
                  <input type="button" class="btn btn-primary btn-lg" value="home" onclick="JSfunction()"
            <button> </button> </a><br>
            <form name="connexion" method="post" action="insertion.php"> 
                e-mail <input type ="email" name="email"> 
         <br>
         mot de passe<input type="password" name="nom_du_champs"/><br>
         <a href="home.html">
         <input type="button" class="btn btn-success" value="se connecter" onclick="JSfunction()"
         <button></button> </a>
         <input type="button" class="btn btn-danger" value="effacer" onclick="JSfunction()"
         <button></button>
            </form>
    </body>
</html>
