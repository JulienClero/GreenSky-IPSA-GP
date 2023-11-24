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
			
			<?php
			if($R>125){echo'Il faut revoir le produit dans sa globalité, vous avez une empreinte carbone élevée';
			}
			else{echo'Le produit est bien pensez à prendre note des remarques ci-dessous';
			}
			?>


			
		</div>
		<br/>
		<br/>

		<div class="wrapper">
			<div classe='one_u'>
				<h2> Partie Conception </h2>
					<svg viewBox="0 0 36 36" class="circle-svg">
						<path class="around"
							stroke-dasharray="100, 100"
							d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
						</path>

						<path class="percent-conception"
							stroke-dasharray="<?php echo 100-($R1/50)*100 ?>, 100" 
							d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
						</path>

						<text x="18" y="14"
							text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R1/50)*100 ?>% 
						</text>

					</svg>
					<br/>
			</div>

			<div class='one_l'>
				<?php
					if($R1>35){echo'Votre score pour votre phase conception est médiocre,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes,</br>
						nous vous recommandons fortement de les suivre étant donné votre faible implication écologique :
						</br></br>
						Faire en sorte que chacun puisse réparer l’objet au lieu de devoir le remplacer dans son intégralité.</br>
						</br></br>
						Veillez à limiter au maximum l’utilisation de matériaux difficiles à recycler, ou rare.
						</br></br>
						Adhérer à des normes ISO. ';
					}

					elseif($R1>10){echo'Votre score pour votre phase conception est correct,</br>
						 pour l’améliorer nous vous proposons les recommandations suivantes :
						 </br></br>
						-Il serait bon de faire en sorte que votre produit soit facile à réparer par les utilisateurs, plutôt que de devoir le changer.
						</br></br>
						-Adhérez à des normes ISO ';
					}

					else{echo'Votre score pour votre phase conception est bon,</br>
						pour l’améliorer nous vous proposons la recommandation suivante :
						</br></br>
						La seule recommandation que nous pourrions émettre serait d’adhérer à plus de normes ISO. ';
					}
				?>
			</div>

			<div classe='two_u'>
				<h2> Partie approvisionnement </h2>
					<svg viewBox="0 0 36 36" class="circle-svg">
						<path class="around"
							stroke-dasharray="100, 100"
							d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
						</path>

						<path class="percent-appro"
							stroke-dasharray="<?php echo 100-($R2/50)*100 ?>, 100" 
							d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
						</path>

						<text x="18" y="14"
							text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R2/50)*100 ?>% 
						</text>

					</svg>
					<br/>
			</div>

			<div class='two_l'>
				<?php
					if($R2>35){echo'Votre score pour votre phase chaine d’approvisionnement est médiocre,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes,</br>
						nous vous recommandons fortement de les suivre étant donné votre faible implication écologique : 
						</br></br>
						-Veillez à réduire au maximum les distances parcourues pour l’acheminement des matières afin de réduire votre empreinte carbone et pouvoir par la suite utiliser le transport routier et fluvial.  
						</br></br>
						-Réfléchissez aussi au conditionnement de vos produits, utilisez plutôt le bois ou le métal afin de pouvoir les réutiliser voire les recycler.  ';
					}

					elseif($R2>10){echo'Votre score pour votre phase chaine d’approvisionnement est correct,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						-Réfléchissez aussi au conditionnement de vos produits, utilisez plutôt le bois ou le métal afin de pouvoir les réutiliser voire les recycler.  ';
					}

					else{echo'Votre score pour votre phase chaine d’approvisionnement est bon,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						privilégiez les circuits courts et les productions locales. 
						</br></br>
						Dans la mesure du possible, priorisez le bois ou le métal afin de pouvoir les réutiliser voire les recycler. ';
					}
				?>
			</div>

			<div classe='three_u'>
				<h2> Partie Fabrication </h2>
				<svg viewBox="0 0 36 36" class="circle-svg">
					<path class="around"
						stroke-dasharray="100, 100"
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
					</path>

					<path class="percent-fab"
						stroke-dasharray="<?php echo 100-($R3/50)*100 ?>, 100" 
						d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831">
					</path>

					<text x="18" y="14"
						text-anchor="middle" dy="7" font-size="20"> <?php echo 100-($R3/50)*100 ?>% 
					</text>

				</svg>
				<br/>
			</div>

			<div class='three_l'>
				<?php
					if($R3>35){echo'Votre score pour votre phase fabrication est médiocre,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes,</br>
						nous vous recommandons fortement de les suivre étant donné votre faible implication écologique : 
						</br></br>
						-Mettez l’eau que vous utilisez en circuit fermé. 
						</br></br>
						-Limitez l’utilisation de métaux rares et limitez les pertes de matériaux. 
						</br></br>
						-Mettez en place une génération d’électricité sur place. 
						</br></br>
						-Privilégiez la fabrication additive, ou le moulage pour de grandes séries. 
						</br></br>
						-Maximisez les ratios entre matière entrante et sortante.';
					}

					elseif($R3>10){echo'Votre score pour votre phase fabrication est correct,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						Améliorer le ratio de matière entrante/sortante 
						</br></br>
						Maximiser la réutilisation de l’eau et/ou son traitement 
						</br></br>
						Utiliser au maximum les énergies renouvelables ';
					}

					else{echo'Votre score pour votre phase fabrication est bon,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						Essayez de tendre vers un ratio aussi proche que possible de 100 % entre les matières entrantes et sortantes. 
						</br></br>
						Concernant l’eau présente dans les circuits, essayez d’obtenir un pourcentage d’eau réutilisée ou traitée proche de 100 %. 
						</br></br>
						Essayez de produire avec une source d’énergie renouvelable. ';
					}
				?>
			</div>

			<div classe='four_u'>
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

			<div class='four_l'>
				<?php
					if($R4>35){echo'Votre score pour votre phase opération est médiocre,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes,</br>
						nous vous recommandons fortement de les suivre étant donné votre faible implication écologique : 
						</br></br>
						-Veillez à limiter les déplacements lors de la maintenance. Cela passe par le fait de choisir un fournisseur dans un secteur proche et d’avoir une équipe qualifiée de réparateur disponible dans un périmètre réduit.  
						</br></br>
						-Il faut maximiser la réparation des pièces endommagées plutôt que de les remplacer. ';
					}

					elseif($R4>10){echo'Votre score pour votre phase opération est correct,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						Veillez à limiter les déplacements lors de la maintenance. Cela passe par le fait de choisir un fournisseur dans un secteur proche et d’avoir une équipe qualifiée de réparateur disponible dans un périmètre réduit. ';
					}

					else{echo'Votre score pour votre phase opération est bon,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						Choisir un fournisseur dans un secteur proche';
					}
				?>
			</div>

			<div classe='five_u'>
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
			<div class='five_l'>
				<?php
					if($R5>35){echo'Votre score pour votre phase recyclage est médiocre,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes,</br>
						nous vous recommandons fortement de les suivre étant donné votre faible implication écologique : 
						</br></br>
						- pensez à la revaloriser au maximum vos déchets afin de leur donner une seconde vie.
						Si cela n’est pas possible, il convient alors de les recycler au plus haut niveau afin de réduire les pertes. ';
					}

					elseif($R5>10){echo'Votre score pour votre phase recyclage est correct,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						Essayez petit à petit d’augmenter le pourcentage de recyclage de votre produit 
						</br></br>
						Essayez d’augmenter la revalorisation de vos déchets afin de leurs permettre d’avoir une seconde vie. ';
					}

					else{echo'Votre score pour votre phase recyclage est bon,</br>
						pour l’améliorer nous vous proposons les recommandations suivantes : 
						</br></br>
						Essayez d’avoir un produit au maximum recyclable. 
						</br></br>
						Essayer de trouver des sous-traitants qui sont dans l’optique de réduire leur impact environnemental.';
					}
				?>
			</div>
		</div>
    </body>
</html>