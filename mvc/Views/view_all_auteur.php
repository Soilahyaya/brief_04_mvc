<form action="?controller=livre&action=all_auteur_list" method="post">
            <select name="Auteur" id="select">
                <option value="#" disabled selected>Selectionez le titre</option>

                <?php foreach ($Auteur as $s): ?>
                    <option value="<?= $s->Nom_auteur ?>"><?= $s->Nom_auteur ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" value="Valider" id="envoyer">
        </form>