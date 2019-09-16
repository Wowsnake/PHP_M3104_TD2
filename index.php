<?php
    include 'utils.inc.php';

?>
<DOCTYPE html>
    <?php start_page('TD2')?>
    <form action="data-processing.php" method="post" style="display: flex; flex-direction: column; align-items: center; justify-content: center">
            <input type="text" name="id" placeholder="Identifiant">
            <input type="radio" id="homme" name="homme">
            <label for="homme">homme</label>
            <input type="radio" id=femme" name="femme">
            <label for="femme">femme</label>
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="mpd" placeholder="Mot de passe">
            <input type="password" name="verif" placeholder="Verifiez mdp">
            <input type="text" name="tel" placeholder="Telephone">
            <select id="Pays">
                <option value=""> Choisir pays</option>
                <option value="France" name="france">France</option>
                <option value="Allemagne" name="allemagne">Allemagne</option>
                <option value="Australie" name="Australie">Australie</option>
                <option value="Etats-Unis" name="Etats-Unis">Etats-Unis</option>
                <option value="Kenya" name="Kenya">Kenya</option>
                <option value="Belgique" name="Belgique">Belgique</option>
                <option value="Italie" name="Italie">Italie</option>
                <option value="Russie" name="Russie">Russie</option>
                <option value="Espagne" name="Espagne">Espagne</option>
                <option value="Portugal" name="Portugal">Portugal</option>
                <option value="Autres" name="autres">Autres</option>
            </select>
            <input type="checkbox" id="conditions" name="conditions">
            <label for="conditions">Conditions Generales</label>
            <input type="submit" value="envoyer">
    </form>
    <?php end_page(); ?>
</DOCTYPE>
