<!DOCTYPE html>
<html>
    <head>
        <title>Exemple</title>
    </head>
    <body>
    	<?php
		#variables pour les resultats
		$R=0;
		$concep=0;
		$appro=0;
		$fabri=0;
		$ope=0;
		$recy=0;

		#liste des noms des questions pour les QCM
		$l1=array('matiere_premiere_1','norme_iso'); # conception
		$l2=array('certif','conditionnement',"emballage_primaire","emballage_secondaire",'emballage_tertiaire'); #chaine d'appro
		$l3=array('procede','stock','dechet_emis','dechet_revalorise','energie_principale'); #fabrication
		$l5=array( "dechets_importants_recyclez" , "importants_dechets_emis" ); #recyclage
		$l4=array("maniere_de_reparer" , "energie_maintenance"); #operation
		
		#listes les questions pour les questionsY/N
		$y1=array('remplacement_piece','remplac_chez_vous');
		$y2=array('distance_fournisseur1','moyen_transport1','distance_fournisseur2','moyen_transport2','emballage_recyclable1','emballage_reutilisable1','emballage_recyclable2','emballage_reutilisable2','emballage_recyclable3','emballage_reutilisable3','privilegier_locaux');
		$y3=array('qt_eau','ratio_in/out');#fabrication
		$y4=array('energie_fonctionnement',"privilegier_reparation","limiter_conso_carburants","produits_polluants_toxiques");
		$y5=array('information_sur_produits','controle_recyclage',"sous_traitants","matiere_valorisee",'quelle_hauteur','pourcentage_recyclage');


		$url1='url conception';
		$url2='mettre url 2';
		$url3='mettre url 3';
		$url4='mettre url 4';
		$url5='mettre url 5';
		$url6='http://localhost/greensky/question.html';

		if ($_SERVER['HTTP_REFERER']==$url6){
			$L= array_merge($l1,$l2,$l3,$l4,$l5);
			$Y= array_merge($y1,$y2,$y3,$y4,$y5);
		}
		for ($i=1; $i <= 5; $i++){
			if ($_SERVER['HTTP_REFERER']==${'url'.$i}){
				$L=${'l'.$i};
				$Y=${'y'.$i};
			}
		}




		foreach($Y as $YN){
			if(!empty($_POST[$YN])){
				$R += (int)  $_POST[$YN];
			}
		}
		

		foreach($L as $CheckNames){
			if(!empty($_POST[$CheckNames])){
				foreach( array($CheckNames) as $value) {
					$R += (int) $_POST[$CheckNames] ;
				}
			}
		}

		echo 'vous avez obtenu un score de ',$R; 
		?>
    </body>
</html>