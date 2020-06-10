<?php 

// Connexion à la BDD : SFRdb
$db = new PDO('mysql:host=localhost;dbname=SFRdb', 'root', '');


if(isset($_POST['valider']))
{ //si le bouton submit est cliqué
	
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];


	if(!empty($_POST['commentaire'])){
	$commentaire = $_POST['commentaire'];
	}
	if(isset($_POST['civilite'])){
		$civilite = $_POST['civilite'];
	   }
	if(isset($_POST['listeConnu'])){
		$listeConnu = $_POST['listeConnu'];
	   }
	if(!empty($_POST['copiecoche'])){
		$copiecoche = $_POST['copiecoche'];
	   }else
	   {
		   $copiecoche = null;
	   }
	

			if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email'])
			AND !empty($_POST['commentaire']) AND !empty($_POST['civilite']) AND !empty($_POST['listeConnu']) )
	{
		
	
	
		


		$insertusers=$db->prepare("INSERT INTO user (id, civilite, nom , prenom, email, commentaire, 
																	listeConnu, copieCoche)
									VALUES(?,?,?,?,?,?,?,?)" );
		$insertusers->execute(array('',$civilite,$nom,$prenom,$email,$commentaire,$listeConnu,$copiecoche ));
		
	
	if ($insertusers == true)
						{
							
							echo "L'enregistrement dans la base de donnée est réussi, <br \>
							 bonne journée à vous ".$_POST['prenom'];

			 
			 
						  }
						  

	}
	

}
