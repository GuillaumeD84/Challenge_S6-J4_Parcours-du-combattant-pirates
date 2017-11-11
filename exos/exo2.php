<?php

/*
 * On passe à l'étape suivante qui consiste à trouver le
 * login / mot de passe de l'administrateur !
 *
 * Pour ça, on a fait appel à nos (in)formateurs afin
 * qu'ils nous communiquent une liste de comptes succeptibles
 * de contenir le bon...
 *
 * Cette fameuse liste se trouve en session, pour la récupérer,
 * il suffit de prendre ce qui se trouve dans $_SESSION['accounts']
 */

// echo '<pre>';
// print_r($_SESSION['accounts']);
// echo '</pre>';


/*
 * Une fois la liste obtenue, on va devoir trouver le bon login / mot de passe !
 * Heureusement, on peut faire appel à la fonction "checkAccount" pour ça. Il suffit
 * de lui passer en paramètre un login et un mot de passe et ça nous retourne "true"
 * si c'est le bon compte, sinon ça nous retourne "false"
 *
 * exemple : $isGoodAccount = checkAccount('monLogin', 'monPassword');
 *
 * Le seul hic, c'est que dans notre liste des comptes, le login et le mot de passe
 * sont dans la même chaine de caractère... (sisi, regardez en faisant un "var_dump" !)
 *
 * Note : là y'a de la boucle et du traitement de chaine de caractères, facile !
 */

// On va se créer un nouveau tableau contenant toutes les combinaisons login/mpd mais au lieu de les avoir en un seul string on les stockeras séparemment dans un sous tableau
$accountsList = array();

foreach ($_SESSION['accounts'] as $account) {
  $accountsList[] = explode('/', $account);
}

// echo '<pre>';
// print_r($accountsList);
// echo '</pre>';

/*
 * Une fois qu'on a trouvé le bon compte, on peut passer à l'exercice suivant !
 *
 * Si c'est trop difficile, on s'accroche et on essaie de prendre le problème
 * d'une autre manière. On hésites pas non plus à demander de l'aide !
 *
 * Si c'est vraiment trop dur, on peut passer à l'exercice suivant quand même,
 * mais on risque de ne pas pouvoir aller au bout...
 */

// Petite boucle qui parcourt notre nouveau tableau afin de chercher le bon mot de passe
foreach ($accountsList as $account) {
  if (checkAccount($account[0], $account[1])) $isGoodAccount = $account;
}
