<form action="?controller=livre&action=all_titre_list" method="post">
            <select name="Titre" id="select">
                <option value="#" disabled selected>Selectionez le titre</option>

                <?php foreach ($titre as $s): ?>
                    <option value="<?= $s->Titre ?>"><?= $s->Titre ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" value="Valider" id="envoyer">
        </form>