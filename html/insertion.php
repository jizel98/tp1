<?php

            $nom = $_POST["nom"];

            $prenom = $_POST["prenom"];

            $email = $_POST["email"];
           
            $password = $_POST["password"];

            $interet = $_POST['interet'];

            if($_POST["password"] == $_POST["confirmation"]) {
                $link = mysql_connect("localhost", "root", "")
                    or die("Impossible de se connecter : " . mysql_error());
                //echo 'Connexion réussie';
                mysql_select_db ("tp1");
                
                $qry="insert into user (email, nom, prenom, mpasse, interer) values ('$email', '$nom', '$prenom', '$password', '$interet')";
                echo $qry;
                mysql_query($qry);


                mysql_close($link);
            }
?>