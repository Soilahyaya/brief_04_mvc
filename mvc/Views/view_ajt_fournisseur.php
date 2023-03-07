

<form action="?controller=fournisseur&action=ajouter_un_fournisseur" method="post">

<table>
<tr> <td>Code</td> <td><input type="number" name="Code_fournisseur" id="code" ></td> </tr>
<tr><td>Raison sociale</td><td><input type="text" name="Raison_sociale" id="raison"></td></tr>
<tr><td>Rue</td><td><input type="text" name="Rue_fournisseur" id="rue"></td></tr>
<tr><td>Code postale</td><td><input type="number" name="Code_postal" id="code_postale"></td></tr>
<tr><td>Localite</td><td><input type="text" name="Localite" id="localite"></td></tr>
<tr><td>Pays</td><td><input type="text" name="Pays" id="pays" required></td></tr>
<tr><td>Tel</td><td><input type="tel" name ="Tel_fournisseur" placeholder = "+33" pattern="^0[0-9]{9}" id="tel" required ></td></tr>
<tr><td>Url</td><td><input type="url" name="Url_fournisseur" id="url" placeholder="https://exemple.com" ></td></tr>
<tr><td>Email</td><td><input type="email" name="Email_fournisseur" id="email" placeholder="@exemple.com" size="30" ></td></tr>
<tr><td>Fax</td><td><input type="number" name="Fax_fournisseur" id="fax"></td></tr>
<TR><TD></td><td><input type="submit" name="submit" value="ajouter"/></td> </TR>
</table>

</form>