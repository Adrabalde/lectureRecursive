<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">


<?php

session_start();
if(isset($_SESSION["login"]))
{
if( $_SESSION["login"]=="faux")
{


?>

    <form action="login.php" method="post">
     <label for="login">Nom d'utilisateur</label>
     <input type="text" name="login" id="" required> <br><br>
     <label for="password">Mot de passe</label>
     <input type="password" name="password" id="" required> <br><br>  
     <input type="reset" value="Effacer">
     <input type="submit" value="Connecter">
       
    </form>
    
    <?php  
    

   
        echo "<span style=\"color:red\"> Merci de vérifier vos coordonnees ! </span>" ; 
    
    
} 
else

{
?>

<?php
	// Importer le fichier de la base de données 
	require_once '../db.php'; 
	// Chercher le nombre de commentaires : 
	$sql = "SELECT count(id) as nb FROM fichierrecursive";
	// Exécuter la requête 
	$resultat=dbQuery($sql);
	// Chercher les associations 
	$row = dbFetchAssoc($resultat);
	// Recupérer le nombre de commentaire dans la variable $nb_commentaire
	$nb_images = $row["nb"];
	
    // Le nombre de commentaire par page
	$nb_par_page=4;
	// Calculer le nombre des pages 
	$nb_de_page = ceil($nb_images / $nb_par_page);

	?>
	<?php
	// Dans cette variable on recupère le nombre de la page selectionnée
     @$page= $_GET["page"];
	// Si c'est le premier accès sur la page il faut initialiser la variable $page à 1
	 
	 if(empty($page)) $page=1;
	// A partir de quel commentaire on va selctionner 
	 $debut = ($page-1)*$nb_par_page;
	//echo $page;
	//echo $debut;
	// Sélectionner les commentaires dans un ordre decroissant, on se limite par le nombre de commentaire par page 
	 $sql = "SELECT * FROM fichierrecursive order by id desc  ";
	// On exécute la requête 
	 $result = dbQuery($sql);
	// Pour chercher toutes les associations (toutes les informations)
	// Définition d'un tableau pour stocker les images 
	$images = array();
	// Boucle pour remplir le tableau $images
	 while($row = dbFetchAssoc($result)) {
	array_push($images, $row);
    // On affiche le contenu et la date de chaque commentaire 
	 ?>	 
		<table style = "margin-left: auto ; margin-right: auto"> 
	<?php	
	}
	// Afficher une gallerie de 4 images 
	// tester si y'a une navigation ou non 
  if(isset($_GET['page']))
  {
	  // calculer l'indice de la premiere image 
	  $i=($_GET['page']-1) * $nb_par_page ;
	  
  }	
  // si on est sur la premiere page pour le premier chargement  
  else 
      $i = 0 ;
	 
	?>
 <tr>
	 <?php
	 // tester l'existence de l'image dans le tableau $images 
	 if(isset($images[$i])){
	 ?>
	 <td> 
<div>
			<img src="../<?=$images[$i]['path']?>" alt="<?=$images[$i]["nom"]?>" width = "350px" height = "250px">
            <a href="supprimer.php?id=<?=$images[$i]['id']?>&nom=<?= $images[$i]['nom']?>">Supprimer</a>
           
            <div>
		<p><?=$images[$i]["nom"]?>:<?=$images[$i]["type"]?> </p> 
		</div>
		</div>
	 </td>
	 <?php
	 }
	 ?>
    <?php
	 if(isset($images[$i+1])){
	 ?>
	 <td>	 
<div>
			<img src="../<?=$images[$i+1]['path']?>" alt="<?=$images[$i+1]["nom"]?>" width = "350px" height = "250px">
            <a href="supprimer.php?id=<?=$images[$i+1]['id']?>&nom=<?= $images[$i+1]['nom']?>">Supprimer</a>
           
            <div>
		<p><?=$images[$i+1]["nom"]?>:<?=$images[$i+1]["type"]?> </p> 
		</div>
		</div>
	 </td>
	 <?php
	 }
	 ?>
 </tr>

 <tr>
	 <?php
	 if(isset($images[$i+2])){
	 ?>
	 <td> 
<div>
			<img src="../<?=$images[$i+2]['path']?>" alt="<?=$images[$i+2]["nom"]?>" width = "350px" height = "250px">
            <a href="supprimer.php?id=<?=$images[$i+2]['id']?>&nom=<?= $images[$i+2]['nom']?>">Supprimer</a>
           
            <div>
		<p><?=$images[$i+2]["nom"]?>:<?=$images[$i+2]["type"]?> </p> 
		</div>
		</div>
	 </td>
	 <?php
	 }
	 ?>
    <?php
	 if(isset($images[$i+3])){
	 ?>
	 <td>	 
<div>
			<img src="../<?=$images[$i+2]['path']?>" alt="<?=$images[$i+3]["nom"]?>" width = "350px" height = "250px">
		   <a href="supprimer.php?id=<?=$images[$i+3]['id']?>&nom=<?= $images[$i+3]['nom']?>">Supprimer</a>
            <div>
		<p><?=$images[$i+3]["nom"]?>:<?=$images[$i+3]["type"]?> </p> 
		</div>
		</div>
	 </td>
	 <?php
	 }
	 ?>
 </tr>
 


  <?php
 //	echo count($images); 
    // On va afficher des liens de navigation 
	?>
	</table>
	<br>
	<div id="pagination">
		<?php
		// pour tester une action de navigation
        if(isset($_GET['page'])) 
		// garder le nombre de la page à visiter (dans la variable $index)
		$index = $_GET['page'] ;
		// pour tester si c'est le premier chargment de la page ou non 
		if(!isset($_GET['page'])) 
		{
			// pour tester l'existence d'une deuxieme page 
			if($nb_de_page > 1)
			echo "<a href='?page=2'>suivant</a>&nbsp&nbsp&nbsp";
		}
		else 
		{
			// tester si l'utilisateur reviens vers la premiere page
			if($_GET['page']== 1) 
			{
				if($nb_de_page > 1)
			echo "<a href='?page=2'>suivant</a>&nbsp&nbsp&nbsp";
			}
			// tester si l'utilisateur est sur la derniere page 
			else if($_GET['page'] == $nb_de_page)
			{
				// calculer le numero de l'avant derniere page 
			$index = $nb_de_page- 1 ;
			echo "<a href='?page=$index'>précedent</a>&nbsp&nbsp&nbsp";

			}
			else 
			{
				// tester si on est dans une page où il y'a une page suivante et une page precedente
			$index -= 1 ;
			echo "<a href='?page=$index'>précedent</a>&nbsp&nbsp&nbsp";
			$index += 2 ;
			echo "<a href='?page=$index'>suivant</a>&nbsp&nbsp&nbsp";

			}
		}
		?>
    </div>	
<?php

}

} 
else
{
    ?>

    
<form action="login.php" method="post">
     <label for="login">Nom d'utilisateur</label>
     <input type="text" name="login" id="" required> <br><br>
     <label for="password">Mot de passe</label>
     <input type="password" name="password" id="" required> <br><br>  
     <input type="reset" value="Effacer">
     <input type="submit" value="Connecter">
       
    </form>

  <?php
}
?>  

   
  
 
    
</body>
</html>