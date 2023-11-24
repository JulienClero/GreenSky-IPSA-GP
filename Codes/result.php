<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title>reponse</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
    <body>
    	<div class = "centrer">
			<?php
			#variables pour les resultats
			$R=0;
			$R1=0;
			$R2=0;
			$R3=0;
			$R4=0;
			$R5=0;

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



			for ($i=1; $i <=5;$i++){
				foreach(${'y'.$i} as $YN){
					if(!empty($_POST[$YN])){
						${'R'.$i} += (int)  $_POST[$YN];
						$R += (int)  $_POST[$YN];
					}
				}

				foreach(${'l'.$i} as $CheckNames){
					if(!empty($_POST[$CheckNames])){
						foreach( $_POST[$CheckNames] as $value) {
							${'R'.$i} += (int) $value ;
							$R += (int) $value ;
						}
					}
				}
			}
			?>
			<br/> 
			<br/>
			<h1> Total </h1>
			<svg viewBox="0 0 36 36" class="circle-svg">
				<path class="around"
					stroke-dasharray="100, 100"
					d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
				</path>

				<path class="percent-total" 
					stroke-dasharray="<?php echo 100-($R/250)*100 ?>, 100" 
					d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
				</path>

				<text x="18" y="14"
					text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R/250)*100 ?>% 
				</text>

			</svg>
			Si vous obtenez un pourcentage inférieur à 50%, il faut revoir largement votre produit. <br/>
			A l'inverse, si vous avez un score supérieur à 50%, c'est très bien, continuez comme cela.
			<hr>
		</div>
		<br/><br/>

		<div class="wrapper">
			<div classe='one'>
				<h2> Partie Conception </h2>
				<svg viewBox="0 0 36 36" class="circle-svg">
					<path class="around"
					 	stroke-dasharray="100, 100"
					 	d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

					<path class="percent-conception"
					 	stroke-dasharray="<?php echo 100-($R1/50)*100 ?>, 100" 
					 	d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

					<text x="18" y="14"
				 		text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R1/50)*100 ?>% </text>

				</svg>
				<br/>
			</div>
			<div classe='two'>
				<h2> Partie approvisionnement </h2>
				<svg viewBox="0 0 36 36" class="circle-svg">
					<path class="around"
						stroke-dasharray="100, 100"
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

					<path class="percent-appro"
						stroke-dasharray="<?php echo 100-($R2/50)*100 ?>, 100" 
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

					<text x="18" y="14"
						text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R2/50)*100 ?>% </text>

				</svg>
				<br/>
			</div>
			<div classe='three'>
			<h2> Partie Fabrication </h2>
			<svg viewBox="0 0 36 36" class="circle-svg">
				<path class="around"
					stroke-dasharray="100, 100"
					d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

				<path class="percent-fab"
					stroke-dasharray="<?php echo 100-($R3/50)*100 ?>, 100" 
					d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

				<text x="18" y="14"
					text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R3/50)*100 ?>% 
				</text>

			</svg>
			<br/>
			</div>
			<div classe='four'>
				<h2> Partie Opération </h2>
				<svg viewBox="0 0 36 36" class="circle-svg">
					<path class="around"
						stroke-dasharray="100, 100"
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
					</path>

					<path class="percent-ope"
						stroke-dasharray="<?php echo 100-($R4/50)*100 ?>, 100" 
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
					</path>

					<text x="18" y="14"
						text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R4/50)*100 ?>% 
					</text>

				</svg>
			<br/>
			</div>
			<div classe='five'>
				<h2> Partie Recyclage </h2>
				<svg viewBox="0 0 36 36" class="circle-svg">
					<path class="around"
						stroke-dasharray="100, 100"
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

					<path class="percent-recyclage"
						stroke-dasharray="<?php echo 100-($R5/50)*100 ?>, 100" 
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
					</path>

					<text x="18" y="14"
						text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R5/50)*100 ?>% 
					</text>

				</svg>
			</div>
		</div>
    </body>
</html>