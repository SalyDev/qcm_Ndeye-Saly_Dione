<?php session_start();
        require "fonction.php";
        deconnexion($_SESSION["loginJoueur"]);
?>
<!DOCTYPE html>
    <head>
        <title>Joueur</title>
        <link rel="stylesheet" href="../asset/CSS/designA11.css">
    </head>
    <body>
    <script>
        function changeSrc(){
            document.querySelector(".icon2").src = "../asset/IMG/Icones/ic-liste-active.png";
        }
        function changeSrc2(){
            document.querySelector(".icon3").src = "../asset/IMG/Icones/ic-ajout-active.png";
        }
    </script>
    <div class="conteneur">
    <div class="main">
    <h1 class="entete"><img class="logo" src="../asset/IMG/logo-QuizzSA.png">Le plaisir de jouer</h1>
       <div class="contain styeAd1">
       <div class="enteteForm style">
         <div class="profilJoueur"><img src="<?php echo $_SESSION["photoJoueur"]?>" class="photoProfil"></div>
         <div class="nomJoueur"><?php echo $_SESSION["prenomJoueur"].' '.$_SESSION["nomJoueur"]?></div>
         <h4 class="bienvenu">BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ
                JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRALE</h4>   
        <div class="btnDec"><form method="POST"><input type="submit" name="deconnexion" value="Deconnexion" class="deconnect"></form></div>
         </div>
         <div class="espaceJoueur">
            <div class="zoneGauche">

            </div>
            <div class="zoneDroite">

            </div> 
        </div>
        </div>
        </div>
        </div>
    </body>
</html>