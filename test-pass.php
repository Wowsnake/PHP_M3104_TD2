<?php
include 'utils.inc.php';
$login = $_POST['login'];
$pwd = $_POST['pwd'];
// BD
$dbLink = mysqli_connect('mysql-steffen.alwaysdata.net', 'steffen_td2', 'salut123456')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'steffen_td2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
$query = 'SELECT * FROM user WHERE login = \'' . $login . '\'';
if(!($dbQuery = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
} else if (isset($_POST['action']) && !empty(trim($login)) && !empty(trim($pwd))) {
    while ($fetch = mysqli_fetch_assoc($dbQuery)) {
        if ($fetch['password'] == $pwd) {
            session_start();
            $_SESSION['login'] = 'ok';
            $_SESSION['id'] = $login;
            $_SESSION['pwd'] = $pwd;
        }
    }
} else {
    header('Location: login.php?step=ERREUR');
}
if ($_SESSION['login'] == 'ok') {
    start_page('Bienvenue');
    echo '<h1> Bienvenue ' . $_SESSION['id'] . '</h1>' . PHP_EOL;
    end_page();
} else {
    header('Location: login.php?step=ERREUR');
}