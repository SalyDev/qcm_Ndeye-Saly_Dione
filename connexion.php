<?php session_start();
$ereur1=$ereur2=$ereur = null;
$eror="";
  
    require "fonction.php";
    $ereur1 = $ereur2 = $login = $password = "";
    // mettre le contenu du fichier dans une variable
    $data = file_get_contents('../asset/JSON/file.json');
    // décoder le flux JSON
    $obj = json_decode($data);
    if(isset($_POST["submit"])){
        
        if(empty($_POST["login"]) || empty($_POST["password"])){
            if(empty($_POST["login"])){
                $ereur1 = "*Donner votre login";
            }
            else{
                $ereur2 = "*Donner votre mot de passe";
            }
        }
        else{
            $password = $_POST["password"];
            $login = $_POST["login"];
            foreach($obj->admin as $element){
                if($login==$element->{'login'} && $password==$element->{'password'}){
                    $_SESSION["loginAdmin"]=$login;
                    $_SESSION["prenomAdmin"]=$element->{'prenom'};
                    $_SESSION["nomAdmin"]=$element->{'nom'};
                    $_SESSION["passwordAdmin"]=$password;
                    $_SESSION["photoAdmin"]=$element->{'photo'};
                    header("Location:interfaceAdmin.php");
                }  
                else{
                    $ereur = "Login ou mot de passe incorrecte";
                    $eror = "ereur";
                }
            }
            foreach($obj->joueur as $element){
                if($login==$element->{'login'} && $password==$element->{'password'}){
                    $_SESSION["loginJoueur"]=$login;
                    $_SESSION["passwordJoueur"]=$password;
                    $_SESSION["prenomJoueur"]=$element->{'prenom'};
                    $_SESSION["nomJoueur"]=$element->{'nom'};
                    $_SESSION["photoJoueur"]=$element->{'photo'};
                    header("Location:interfaceJoueur.php");
                }  
                else{
                    $ereur = "Login ou mot de passe incorrecte";
                    $eror = "ereur";
                }
            }
          
          
            
        }
    }
    ?>
    <div class="<?php echo $eror?>"><?php echo $ereur; ?></div>
<?php
    
?>
<!DOCTYPE html>
    <head>
        <title>connexion</title>
        <link rel="stylesheet" href="../asset/CSS/designA11.css">
    </head>
    <body>
    <div class="conteneur">
        <div class="main">
            <h1 class="entete"><img class="logo" src="../asset/IMG/logo-QuizzSA.png">Le plaisir de jouer</h1>
            <div class="contain">
            <section class="enteteForm"><h4>Login form</h4><img class="icon1" src="../asset/IMG/Icones/ic-ajout-réponse.png"></section> 
                <form method="POST" class="formul">
                    <div class="chps"><input class="input" type="text" name="login" placeholder="Utilisateur" autofocus value="<?=$login?>"><img class="img" src="../asset/IMG/Icones/ic-login.png"><span class="ereur1"><?php echo $ereur1?></span></div>
                    <div class="chps"><input class="input" type="password" name="password" placeholder="Mot de passe" value="<?=$password?>"><img class="img" src="../asset/IMG/Icones/ic-password.png"><span class="ereur1"><?php echo $ereur2?></span></div>
                    <div><input class="bouton" type="submit" name="submit" value="Connexion"><a class="inscription" href="inscriptionJoueur.php">S'inscrire pour jouer?</a></div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>
