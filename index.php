<?php
    include 'utils.inc.php';

?>
<DOCTYPE html>
    <html>
    <body>
    <form>
            <input type="text" name="id" placeholder="Identifiant">
            <input type="radio" name="homme">
            <input type="radio" name="femme">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="mpd" placeholder="Mot de passe">
            <input type="password" name="verif" placeholder="Verifiez mdp">
            <input type="text" name="tel" placeholder="Telephone">
            <select id="Pays">
                <option value="" Choisir pays></option>
                <option value="France" name="france"France></option>
                <option value="Allemagne" name="allemagne"Allemagne></option>
            </select>
            <input type="checkbox" id="conditions" name="conditions">
            <label for="conditions"Conditions Generales></label>
            <input type="submit" value="envoyer">
    </form>
    </body>
    </html>
</DOCTYPE>
