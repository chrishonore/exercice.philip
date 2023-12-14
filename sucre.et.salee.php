<?php
/* Demandez à l'utilisateur si il préfère manger sucré ou salé. Proposez-lui 3 types
d'aliments de la catégorie, l'utilisateur peut ensuite tapper sur 1, 2 ou 3 pour
sélectionner un des aliments, ou 4 si il n'aime aucun de ces aliments. Dans les 3
premiers cas, dites lui combien de calorie vaut l'aliment (inventez un chiffre),
dans le 4ème cas, le programme s'excuse et dit qu'il n'a rien d'autre en stock.
*/
echo " que prefere vous manger ? tape 1 pour sucre et 2 pour salee . ";
$choixSel=trim(fgets( STDIN)) ;