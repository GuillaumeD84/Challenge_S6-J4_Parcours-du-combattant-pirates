<?php

/*
 * On doit trouver un chiffre aléatoire qui a été généré en secret ! Ce chiffre
 * est compris entre 0 et 1000. On peut appeler la fonction "isSecretNumber" en
 * lui passant le chiffre à tester pour savoir si c'est le bon ou pas :
 *
 * ex : $reponse = isSecretNumber(123);
 *
 * Si le chiffre est le bon, la fonction retourne "true", sinon elle retourne "false".
 *
 * Une fois que tu as trouvé le bon nombre, tu dois le retourner avec "return"
 * Conseils : Le mieux c'est de tester toutes les possibilités avec une boucle ;)
 */

function searchAndFind() {

  // Pas grand chose à commenter ici. On a largement dépasser ce niveau de code maintenant !
  for ($number = 0; $number <= 1000; $number++) {
    if (isSecretNumber($number)) return $number;
  }

}
