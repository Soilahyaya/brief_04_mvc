Résultat de votre recherche :
<br/>


<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Code</th>
			<th>Raison sociale</th>
			<th>Rue</th>
			<th>Code postal</th>
			<th>Localite</th>
			<th>Pays</th>
			<th>Tel</th>
			<th>Url</th>
			<th>Email</th>
			<th>Fax</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($fournisseur as $l):?>
			<tr>
				<td> <?=$l->Code_fournisseur?> </td>
				<td> <?=$l->Raison_sociale?> </td>
				<td> <?=$l->Rue_fournisseur?> </td>
				<td> <?=$l->Code_postal?> </td>
				<td> <?=$l->Localite?></td>
				<td> <?=$l->Pays?></td>
				<td> <?=$l->Tel_fournisseur?> </td>
				<td> <?=$l->Url_fournisseur?> </td>
				<td> <?=$l->Email_fournisseur?> </td>
				<td> <?=$l->Fax_fournisseur?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
    
       
 