<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_top.php"; ?>

<h2>Nouveau Match</h2>
<hr>

<table class="form-table">
    <form method="POST">
        <tr>
            <td><label for="JR">Joueur 1</label></td>
            <td><input class="form-control" type="text" name="JR" value="" required/></td>
        </tr>
        <tr>
            <td><label for="JV">Joueur 2</label></td>
            <td><input class="form-control" type="text" name="JV" value="" required/></td>
        </tr>
        <tr>
            <td><label for="date">Date</label></td>
            <td><input class="form-control" type="date" name="date" value="" required/></td>
        </tr>
        <tr>
            <td><label for="lieu">Salle</label></td>
            <td><input class="form-control" type="text" name="lieu" value="" required/></td>
        </tr>
        <tr>
            <td><label for="parametre">Tour</label></td>
            <td>
                <select name="parametre" class="form-control" required>
                    <option value="128F">128F</option>
                    <option value="64F">64F</option>
                    <option value="32F">32F</option>
                    <option value="16F">16F</option>
                    <option value="8F">8F</option>
                    <option value="0F">0F</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="forfait">Forfait</label></td>
            <fieldset>
                <td><input type="radio" name="forfait" value="A">Forfait club visité</td>
                <td><input type="radio" name="forfait" value="J" checked>Match joué</td>
                <td><input type="radio" name="forfait" value="B">Forfait club visiteur</td>
            </fieldset>
        </tr>
        <tr>
            <td colspan="2">
                <a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "admin/listeTournoi/$lastId" ?>">Annuler</a>
                <input class="primarybuttonBlue" type="submit" value="Enregistrer" name="formMatchindividuel" />
            </td>
        </tr>
    </form>
</table>

<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_bottom.php"; ?>
