<form action="?controller=fournisseur&action=all_raison_sociale_list" method="post">
            <select name="Raison_sociale" id="select">
                <option value="#" disabled selected>Saissisez la raison sociale</option>

                <?php foreach ($raison_sociale as $s): ?>
                    <option value="<?= $s->Raison_sociale ?>"><?= $s->Raison_sociale ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" value="Valider" id="envoyer">
        </form>