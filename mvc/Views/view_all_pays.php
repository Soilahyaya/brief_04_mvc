<form action="?controller=fournisseur&action=all_pays_list" method="post">
            <select name="Pays" id="select">
                <option value="#" disabled selected>Saissisez la raison sociale</option>

                <?php foreach ($pays as $s): ?>
                    <option value="<?= $s->Pays ?>"><?= $s->Pays ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" value="Valider" id="envoyer">
        </form>