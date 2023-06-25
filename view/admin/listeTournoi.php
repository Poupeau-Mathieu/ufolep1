<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_top.php"; ?>

<h2>Liste des tournois des matchs individuel</h2>
<hr>
<a href="<?= BASE_URL . DS . "admin" . DS . "formTournoi" ?>" class="button primarybuttonBlue">
    <i class="fas fa-plus fa-sm"></i>&nbsp; Nouveau Tournoi
</a>
<a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "admin/listeChampionnat" ?>">
    Retour au tableau de bord
</a>
<br>
<br>

<table class="data-table sober">
    <tr>
        <td>
            Tournoi 2023 Départemental Division 1
            <a href="<?= BASE_URL . DS . "admin" . DS . "listeMatchIndividuel/2" ?>" class="button primarybuttonBlue">
                Modifier
            </a>
        </td>
    </tr>
    <tr>
        <td>
            Tournoi 2023 Départemental Division 1
            <a href="<?= BASE_URL . DS . "admin" . DS . "listeMatchIndividuel/1" ?>" class="button primarybuttonBlue">
                Modifier
            </a>
        </td>
    </tr>
</table>

<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_bottom.php"; ?>
