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
            <a href="connexion.html"> <input type="button"class="btn btn-primary btn-lg" value="connexion" onclick="JSfunction()"
      <button></button> </a>
      <br>
      <a href="index.html">
            <input type="button" class="btn btn-primary btn-lg" value="home" onclick="JSfunction()"
      <button> </button> </a>
      <form name="inscription" method="post" action="insertion.php">
          Nom <input type="text" name="nom_du_champ"/>
          <br>
         prénom <input type="text" name="nom_du_champ"/>
         <br>
         téléphone <input type="number" name="nom_du_champ"/>
         <br>
         genre <input type ="radio" name="gender" value="male"> male
         <input type="radio" name="gender" value="female"> female
         <input type ="radio" name="gender" value="autre"> autre
         <br>
         e-mail <input type ="email" name="email"> 
         <br>
     date de naissance <input type="date" name="date"> 
     <br>
     nationnalité <select>
        <option value="tunisienne" selected>tunisienne</option>
        <option value="française">française</option>
        <option value="italienne">italienne</option>
        <option value="algériènne">algérienne</option>
        <option value="américainne">américainne</option>
        </select>
        <br>
        intérêts:<br>  <input type="checkbox" value="sport" checked>sport<br>
        <input type="checkbox" checked autocomplete="off" value="musique" checked>musique <br>
        <input type="checkbox" checked autocomplete="off" value="voyage" checked>voyage<br>
        <input type="checkbox" checked autocomplete="off" value="lecture" checked>lecture<br>
        <input type="checkbox" checked autocomplete="off" value="théâtre" checked>théâtre<br>
        <input type="checkbox" checked autocomplete="off" value="cinéma" checked>cinéma<br>
        <input type="checkbox" checked autocomplete="off" value="peinture" checked>peinture<br>
        mot de passe<input type="password" name="nom_du_champs"/><br>
        confirmation<input type="password" name="nom_du_champs"/><br>
        <input type="button" class="btn btn-success" value="envoyer" onclick="JSfunction()"
      <button></button>
      <input type="button" class="btn btn-danger" value="effacer" onclick="JSfunction()"
      <button></button>
      </form>
 
    </body>
</html>