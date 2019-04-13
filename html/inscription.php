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
    <div class="text-center">
    <?php
            
            $link = mysql_connect("localhost", "root", "")
                or die("Impossible de se connecter : " . mysql_error());
            echo 'Connexion réussie';
            mysql_close($link);
            ?>
            <img src="../images/logo.jpg"  width=150" height=150px "alt="logo">
            <br> </br>
            <a href="connexion.php"> <input type="button"class="btn btn-primary btn-lg" value="connexion" onclick="JSfunction()"
      <button></button> </a>
      <br></br>
      <a href="index.php">
            <input type="button" class="btn btn-primary btn-lg" value="home" onclick="JSfunction()"
      <button> </button> </a>
</div>
      <form name="inscription" method="post" action="insertion.php">
          Nom <input type="text" name="nom"/>
          <br>
         prénom <input type="text" name="prenom"/>
         <br>
         téléphone <input type="number" name="telephone"/>
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
        <option value="tunisienne" name="nat" selected>tunisienne</option>
        <option value="française" name="nat">française</option>
        <option value="italienne" name="nat">italienne</option>
        <option value="algériènne" name="nat">algérienne</option>
        <option value="américainne" name="nat">américainne</option>
        </select>
        <br>
        intérêts:<br>  <input type="checkbox" value="sport" checked>sport<br>
        <input type="checkbox" name = "chkl []"  autocomplete="off" value="musique" checked>musique <br>
        <input type="checkbox" name = "chkl []"  autocomplete="off" value="voyage" checked>voyage<br>
        <input type="checkbox" name = "chkl []"  autocomplete="off" value="lecture" checked>lecture<br>
        <input type="checkbox" name = "chkl []"  autocomplete="off" value="théâtre" checked>théâtre<br>
        <input type="checkbox" name = "chkl []"  autocomplete="off" value="cinéma" checked>cinéma<br>
        <input type="checkbox" name = "chkl []"  autocomplete="off" value="peinture" checked>peinture<br>
        <input type = "submit"  name = "Submit"  value = "Submit" >  
        mot de passe<input type="password" name="nom_du_champs"/><br>
        confirmation<input type="password" name="nom_du_champs"/><br>
        <input type="button" class="btn btn-success" value="envoyer" onclick="JSfunction()"
      <button></button>
      <input type="button" class="btn btn-danger" value="effacer" onclick="JSfunction()"
      <button></button>
      </form>
 
    </body>
</html>