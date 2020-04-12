<?php
 //fonction qui teste si un nom ou un prenomest valide
 function validNom($nom){
    $regex = '#^[A-Z][a-z]+(([ ][A-Z][a-z]+)+)?$#';
    return preg_match($regex, $nom);
}
//function qui test si un mot de passe est valide
function validPass($password){
    $regex = '#.{8,}#';
    return preg_match($regex,$password);
}
//fonction qui teste si un login est correcte
    function validLogin($login){
        $regex='#[A-Za-z0-9]{2,}#';
        return preg_match($regex, $login);
    }
    //fonction qui permet de se deconnecter
    function deconnexion($loginUser){
        if(isset($_POST["deconnexion"]) || !isset($loginUser)){
                  session_destroy();
                 header("Location:connexion.php");
              }
    }
 
?>