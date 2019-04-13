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
            <a href="profil.html">
                  <input type="button" class="btn btn-primary btn-lg" value="profil" onclick="JSfunction()"
            <button> </button> </a><br>
            <h3>TO DO</h3>
            <br>
            <a href="ajoutertodo.html">
            <input type="button" class="btn btn-info" value="ajouter to do" onclick="JSfunction()"
            <button></button> </a> 
            <br><br>
            <div classe="d1">
            <table class="table">
               <tr><th scope="row">description</th><th>date d'ajout</th><th>action</th></tr>
               <tr><td scope="row">préparer le projet</td><td>01/04/2019</td><td><input type="button" class="btn btn-success" value="done" onclick="JSfunction()"
                <button></button></td></tr>
                <tr><td scope="row">faire la présentation du projet</td><td>28/04/2019</td><td><input type="button" class="btn btn-success" value="done" onclick="JSfunction()"
                    <button></button></td></tr>

            </table>
                </div>
    </body>
</html>
