<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_top.php"; 
$lastI0d = "" ?>
    <div>
        <h2>Tournois des matchs individuels</h2>
        <hr>
        <a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "championnat/liste" ?>">Acceuil</a>
        <a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "admin/listeTournoi" ?>">Retour</a>
        <a href="<?php echo BASE_URL . DS . "admin" . DS . "formMatchindividuel/$lastI0d" ?>"class="button primarybuttonBlue"><i class="fas fa-plus fa-sm"></i>&nbsp Nouveau Match</a>
            <table border='1'class="data-table sober">
        <thead>
            <th>Joueurs A</th>
            <th>Joueurs B</th>
            <th>Manche 1</th>
            <th>Manche 2</th>
            <th>Manche 3</th>
            <th>Manche 4</th>
            <th>Manche 5</th>
            <th>Points A</th>
            <th>Points B</th>
            <th>Forfait</th>
            <th>Tour</th>
            <th>Date</th>
        </thead>
        <?php foreach ($matches as $match) : ?>
            <tr>
                <td>
                    <?php if (isset($match->JR)) {
                        echo $match->JR;
                    } else {
                        echo "N/A";
                    } ?>
                </td>
                <td>
                    <?php if (isset($match->JV)) {
                        echo $match->JV;
                    } else {
                        echo "N/A";
                    } ?>
                </td>
                <td>
                <form method="post">
                    <input class="form-control" type="text" id="Manche1" name="Manche1" size="6" style="text-align: center;" 
                    value="<?php echo isset($_POST['nomEquipe']) ? $_POST['nomEquipe'] : ''; ?>" required>
                </form>
                </td>
                <td>
                <form method="post">
                    <input class="form-control" type="text" id="Manche2" name="Manche2" size="6" style="text-align: center;" 
                    value="<?php echo isset($_POST['nomEquipe']) ? $_POST['nomEquipe'] : ''; ?>" required>
                </form>
                </td>
                <td>
                <form method="post">
                    <input class="form-control" type="text" id="Manche3" name="Manche3" size="6" style="text-align: center;" 
                    value="<?php echo isset($_POST['nomEquipe']) ? $_POST['nomEquipe'] : ''; ?>" required>
                </form>
                </td>
                <td>
                <form method="post">
                    <input class="form-control" type="text" id="Manche4" name="Manche4" size="6" style="text-align: center;" 
                    value="<?php echo isset($_POST['nomEquipe']) ? $_POST['nomEquipe'] : ''; ?>" required>
                </form>
                </td>
                <td>
                <form method="post">
                    <input class="form-control" type="text" id="Manche5" name="Manche5" size="6" style="text-align: center;" 
                    value="<?php echo isset($_POST['nomEquipe']) ? $_POST['nomEquipe'] : ''; ?>" required>
                </form>
                </td>
                <td>
                    <?php if (isset($match->PointsA)) {
                        echo $match->PointsA;
                    } else {
                        echo "N/A";
                    } ?>
                </td>
                <td>
                    <?php if (isset($match->PointsB)) {
                        echo $match->PointsB;
                    } else {
                        echo "N/A";
                    } ?>
                </td>
                <td>
                    <?php if (isset($match->forfait)) {
                        echo $match->forfait;
                    } else {
                        echo "N/A";
                    } ?>
                </td>
                <td>
                    <?php if (isset($match->tour)) {
                        echo $match->tour;
                    } else {
                        echo "N/A";
                    } ?>
                </td>
                <td>
                    <?php if (isset($match->date)) {
                        echo $match->date;
                    } else {
                        echo "N/A";
                    } ?>
                </td>
            </tr>
        <?php endforeach; ?>

        </table>
    </div>
    
<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_bottom.php"; ?>
