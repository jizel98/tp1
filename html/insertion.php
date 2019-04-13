<?php
include_once("inscription.php");
            $nom = $_POST["nom"];

            $prenom = $_POST["prenom"];

            $email = $_POST["email"];
           
            $password = $_POST["password"];

            $interet = $_POST['chkl []'];

            $gender= $_POST["gender"];

            $telephone= $_POST["telephone"];

            $nationalite= $_POST['nat'];

            $datedenaissance= $_POST['date'];

            if($_POST["password"] == $_POST["confirmation"]) {
                $link = mysql_connect("localhost", "root", "")
                    or die("Impossible de se connecter : " . mysql_error());
                //echo 'Connexion réussie';
                mysql_select_db ("tp1");
            
                
                $qry="insert into user (email, nom, prenom, password, interet, gender,telephone, nationalite, datedenaissance) values ('$email', '$nom', '$prenom', '$password', '$chkl []', '$gender', '$telephone', '$nationalite','$datedenaissance' )";
                echo $qry;
                mysql_query($qry);

                mysql_close($link);
            }

             
?>