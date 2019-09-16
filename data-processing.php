<?php
    $action = $_POST['action'];
    if($action == 'mailer'){
        $id = $_POST['id'];
        $sexe = $_POST['sexe'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $verif = $_POST['verif'];
        $tel = $_POST['tel'];
        $pays = $_POST['pays'];
        $conditions = $_POST['conditions'];

        $message = 'Voici vos indentifiants D\'inscriptions :' . $id . PHP_EOL;
        $message .= 'Email : ' . $mail . PHP_EOL;
        $message .= 'Mot de passe : ' . $mdp . PHP_EOL;
        echo $message;
        mail("steffen.alvarez@etu.univ-amu.fr", "formulaire", $message);
    }
    else{
        echo '<br/><strong>Bouton non gere ! </strong><br/>';
    }
    $dbLink=mysqli_connect('mysql-steffen.alwaysdata.net','steffen','salut123456')
    or die('Erreur de connexion aus erveur:'.mysqli_connect_error());

    mysqli_select_db($dbLink , 'steffen_php')
    or die('Erreur dans la selection de la base : ' . mysqli_error($dbLink));
    ?>
