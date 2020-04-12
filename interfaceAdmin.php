<?php session_start();
        require "fonction.php";
        deconnexion($_SESSION["loginAdmin"]);
?>
<!DOCTYPE html>
    <head>
        <title>Admin</title>
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
       <div class="enteteForm style"><h2 class="styleAd2">CREER ET PARAMETREZ VOS QUIZZ</h2><form class="monForm" method="POST"><input class="deconnect" type="submit" name="deconnexion" value="deconnexion"></form></div> 
            <div class="section1">
                <div class="section1_1">
                    <div class="profil"><img src="<?php echo $_SESSION['photoAdmin'] ?>" class="photoProfil" ></div>
                    <div class="prenomAdmin"><?php echo $_SESSION["prenomAdmin"]?></div>
                    <div class="nomAdmin"><?php echo $_SESSION["nomAdmin"]?></div>
                </div>
                <div class="section1_2">
                    <ul>
                        <a href="#" onfocus="changeSrc()"><li>Liste des questions <img src="../asset./IMG/Icones/ic-liste.png" class="icon2"></li></a>
                        <a href="#2" onfocus="changeSrc2()"><li>Creer Admin <img src="../asset./IMG/Icones/ic-ajout.png" class="icon3"></li></a>
                        <li>Liste joueurs <span class="icon4"></li>
                        <li>Creer questions <span class="icon5"></li>
                    </ul> 
                </div>
            </div>
            <div class="section2">
                <h3></h3>
                <div class="section2_1"></div>
                <div class="section2_2"><input class="sivant" type="button" value="suivant"></div>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>