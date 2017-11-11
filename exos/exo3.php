<?php

/*
 * On doit afficher un formulaire pour s'identifier !
 * Ce formulaire se trouve dans le fichier "templates/exo3.php",
 * tu dois l'inclure ci dessous.
 */

// On inclu notre template
require_once('templates/exo3.php');

/*
 * Une fois que le formulaire est affiché, il va falloir saisir le bon
 * login / mot de passe. Ce sont ceux que tu as trouvé à l'exercice précédent !
 * Tu remplis le formulaire avec les bonnes données et tu le valide.
 */

// Un echo + print_r pour récupérer les identifiants du compte
echo 'Account : ';
print_r($isGoodAccount);


/*
 * On doit maintenant récupérer les données du formulaire. Donc
 * on récupère ce qui se trouve dans $_POST (login + mot de passe)
 */

// On récupère les données de $_POST que l'on stocke dans deux nouvelles variables
$username = $_POST['username'];
$password = $_POST['password'];

echo '<br>Nom de compte : '.$username.', Mot de passe : '.$password;

/*
 * On récupère les données du formulaire dans $_POST (username + password).
 * On transmet ces données à la fonction "etapeFinale" :
 *
 * ex : etapeFinale($username, $password)
 *
 * Si on a passé le bon login + mot de passe, on devrais voir apparaitre le "Yeah !" ;)
 *
 * Conseils : bon, on pourrait directement passer le login + mot de passe
 * sans avoir besoin du formulaire, mais ça ne nous ferait pas réviser les
 * formulaires... Du coup, on essais de le faire avec le form ! :p
 */

// On fête notre victoire avec du bon rhum !
etapeFinale($username, $password);
