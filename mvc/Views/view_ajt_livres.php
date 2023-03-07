
<div class="titre"><h1>Page d’ajout d’un livre</h1></div>

</div>

<section class= "page2">

     <form action="?controller=livre&action=ajouter_un_livre" method="post">

        <table>
            <tr> <td>ISBN</td> <td><input type="text" name="isbn" id="isbn"required></td> </tr>
            <tr><td>Titre</td><td><input type="text" name="titre" id="titre"></td></tr>
            <tr><td>Theme</td><td><input type="text" name="theme" id="theme"></td></tr>
            <tr><td>Nb page</td><td><input type="number" name="nbpages" id="nbpages"></td></tr>
            <tr><td>Format</td><td><input type="text" name="format" id="name"></td></tr>
            <tr><td>Nom auteur</td><td><input type="text" name="nom" id="nom"required></td></tr>
            <tr><td>Prenom auteur</td><td><input type="text" name="prenom" id="prenom"></td></tr>
            <tr><td>Editeur</td><td><input type="text" name="editeur" id="editeur"></td></tr>
            <tr><td>Annee edition</td><td><input type="year" name="annee" id="annee"></td></tr>
            <tr><td>Prix</td><td><input type="price" name="prix" id="prix"></td></tr>
            <tr><td>Langue</td><td><input type="text" name="langue" id="langue"></td></tr>
            <TR><TD></td><td><input type="submit" name="submit" value="ajouter"/></td> </TR>
        </table>
    
   </form>

    </section>

