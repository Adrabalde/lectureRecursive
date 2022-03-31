<?php
$login = $_POST["login"]; // récuperer le login 
$motdepasse = $_POST["password"]; // récperer le mot de passe


if($login=="admin" && $motdepasse=="123456")
{ session_start();
 $_SESSION["login"] = "success"; 

}
else
{
    session_start();
    $_SESSION["login"] = "faux";   

}


header("location:index.php"); 

?>