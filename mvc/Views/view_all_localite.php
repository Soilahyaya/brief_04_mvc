<form action="?controller=fournisseur&action=all_localite_list" method="post">
            <select name="Localite" id="select">
                <option value="#" disabled selected>Saissisez la raison sociale</option>

                <?php foreach ($localite as $s): ?>
                    <option value="<?= $s->Localite ?>"><?= $s->Localite ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" value="Valider" id="envoyer">
        </form>