<!DOCTYPE html>
<html>
	<body>
 		<form method="POST" action="Result.php">
 		
##opération

         		 <p> 1. Quelle énergie utilisez-vous pour la maintenance de votre produit ? 
  				<input type="checkbox" name='energie_maintenance' value="1"> Electricité <br/>
  				<input type="checkbox" name='energie_maintenance' value="2"> Batterie <br/>
  				<input type="checkbox" name='energie_maintenance' value="3"> Gaz <br/>
  				<input type="checkbox" name='energie_maintenance' value="1"> Pétroles <br/>
  				<input type="checkbox" name='energie_maintenance' value="2"> Manuelle <br/>
  				<input type="checkbox" name='energie_maintenance' value="3"> Autres <br/>
 		
 		
    			<p>2. Question qui demande 1 truc  <input type="radio" name="produits_polluants_toxiques" value="" checked>oui	
				<input type="radio" name="produits_polluants_toxiques" value="0">non</p>

				<p>3. Question qui demande 1 autre truc  <input type="radio" name="limiter_conso_carburants" value="2" checked>oui	
    			<input type="radio" name="limiter_conso_carburants" value="3">non</p>
    			

                <p>4. Question  qui demande 1 truc  <input type="radio" name="privilegier_reparation" value="" checked>oui	
				<input type="radio" name="privilegier_reparation" value="0">non</p>


                <p> 5. Quelle énergie votre produit utilise t’il lors de son fonctionnement ? 
				<input type="checkbox" name='energie_fonctionnement' value="1"> Energie rechargeable <br/>
				<input type="checkbox" name='energie_fonctionnement' value="2"> Batterie <br/>
				<input type="checkbox" name='energie_fonctionnement' value="3"> Gaz <br/>
				<input type="checkbox" name='energie_fonctionnement' value="1"> Produits pétroliers <br/>
				<input type="checkbox" name='energie_fonctionnement' value="2"> Manuelle <br/>
				<input type="checkbox" name='energie_fonctionnement' value="3"> Autres <br/>


				<p> 6. De quelle manière votre produit peut-il être réparé ?	 
				<input type="checkbox" name='maniere_de_reparer' value="1"> Par l'utilisateur directement <br/>
				<input type="checkbox" name='maniere_de_reparer' value="2"> Par une entreprise spécialisée <br/>
				<input type="checkbox" name='maniere_de_reparer' value="3"> Uniquement par votre entreprise <br/>
				
				
			
				

   				<p><input type="submit" value="Result" name="Result">   //This button opens Result.php</p>
		</form>
	</body>
</html>

