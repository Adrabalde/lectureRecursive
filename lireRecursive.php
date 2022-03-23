
<P>
<B>DEBUTTTTTT DU PROCESSUS :</B>
<BR>
<!-- heure de debut -->

<?php echo " ", date ("h:i:s"); ?>
</P>
<?php

// le temps maximal d'exécution du script
set_time_limit (500);
// le chemin de depart
$path= "docs";

// l'appel de la fonction exploreDir
explorerDir($path);

function explorerDir($path)
{
	// ouvrir le dossier passé comme parametre d'entree
	$folder = opendir($path);
	
	// parcourir l'ensemble de dossier et de fichier du dossier courant
	while($entree = readdir($folder))
	{		
		// si le dossier courant n'est pas le dossier lui meme ou le dossier pere 
		if($entree != "." && $entree != "..")
		{
			// s'il existe un dossier
			if(is_dir($path."/".$entree))
			{
				// sauvegarder le path 
				$sav_path = $path;
				// changer le path courant par le nouveau dossier trouvé
				$path .= "/".$entree;
				// appel recursif sur le nouveau dossier 
				explorerDir($path);
				// on revient vers le dossier initial
				$path = $sav_path;
                echo "Dossier: ".$entree."<br>";
			}
			else
			{
				// s'il existe un fichier, sauvegarder le chemin vers cette source 
				$path_source = $path."/".$entree;				
				
					
                $typedefichier = strtolower(pathinfo($path_source,PATHINFO_EXTENSION));
                $nom = $entree ;
                $taille = filesize($path_source) ;
                echo "Fichier: ".$entree."<br>";
                //Si c'est un .png ou un .jpeg
                if($typedefichier=='jpeg' || $typedefichier == 'png' || $typedefichier == 'jpg') 
                  {
                    //require_once 'db.php';
                    $nom=  htmlspecialchars($nom);
                    $lien=  htmlspecialchars($path_source);
                    
                    // Enregistrer dans la bdd 
                    $sql = "insert into fichierrecursive(nom,taille, type, path) values('$nom', '$taille', '$typedefichier', '$lien')";
                   // db($sql);
                   
                   
                    

                  }                
				
				
			}
		}
	}
	closedir($folder);
}
// permet d'exécuter une requete 
function db($sql)
{
    $dbConn = new mysqli('localhost', 'root', '', 'pagination') ;
    $result = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
}
?>
<P>
<B>FINNNNNN DU PROCESSUS :</B>
<BR>
<?php echo " ", date ("h:i:s"); ?>
</P>
