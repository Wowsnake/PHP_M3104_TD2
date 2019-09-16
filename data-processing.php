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

        $message = 'Voici vos indentifiants D\'inscriptions :' . PHP_EOL;
        $message .= 'Email : ' . $mail . PHP_EOL;
        $message .= 'Mot de passe : ' . PHP_EOL . $mdp;

    }
    else{
        echo '<br/><strong>Bouton non gere ! </strong><br/>';
    }

    ?>
