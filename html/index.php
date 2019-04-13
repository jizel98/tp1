<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
    <div class="text-center">

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
            <img src="../images/logo.jpg" class="displayed" width=150" height=150px "alt="logo">
</br>
            <br>
            <a href="inscription.php"> <input type="button" class="btn btn-primary btn-lg" value="inscription" onclick="JSfunction()"
      <button></button> </a>
      <br> </br>
          <a href="connexion.php"> <input type="button" class="btn btn-primary btn-lg" value="connexion" onclick="JSfunction()"
      <button> </button> </a>
      <p >L'Institut des hautes études commerciales de Carthage est la première école de commerce en Tunisie, surplombant la majestueuse colline de Carthage, où elle a été créée en 1942. IHEC Carthage est une université publique sous la tutelle du Rectorat de Carthage.</p>  
<br>

<img src="../images/69-p.jpg" class="img-thumbnail" alt="photo">
</div>
    </body>
</html>
