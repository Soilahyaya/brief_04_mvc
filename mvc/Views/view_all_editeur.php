<form action="?controller=livre&action=all_editeur_list" method="post">
            <select name="editeur" id="select">
                <option value="#" disabled selected>Selectionez le titre</option>

                <?php foreach ($editeur as $s): ?>
                    <option value="<?= $s->Editeur ?>"><?= $s->Editeur ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" value="Valider" id="envoyer">
        </form>