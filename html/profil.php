<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../../formalab_html_1/css/bootstrap.min.css">
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
            <a href="connexion.php">
            <input type="button" class="btn btn-primary btn-lg" value="déconnexion" onclick="JSfunction()"
            <button></button> </a>
            <br>
            <a href="home.php">
                  <input type="button" class="btn btn-primary btn-lg" value="acceuil" onclick="JSfunction()"
            <button> </button> </a> <br>
            <h1>Gaida Mahjoub Jizel</h1>
            <h3>e-mail: jizelgm98@gmail.com</h3>
            <img src="../images/photo.jpg" width=100" height=150px " alt="photo f cv"/>
            <br>
            <h2>Etudes:</h2>
            <br>
            2017-2019: institut des hautes études commerciales carthage
            spécialisation:comptabilité </h4>
            <br>
<h4>juin 2017: baccalauréat-section mathématiques</h4>
<br>
<h2>compétances linguistiques:</h2>
<br>
           <h4>arabe, francais, anglais et chinois</h4>
           <br>
           <h2> centres d'interets:
           </h2>
           <br>
           <h4>sport, musique, voyages et lecture
           </h4>
</html>
