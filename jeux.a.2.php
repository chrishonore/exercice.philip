<?php
/*Implémentez le jeu du Morpion (Tic Tac Toe). Créez une grille 3x3 et permettez
à deux joueurs de jouer tour à tour. Demandez à chaque joueur de saisir les
Algorithmie
Pratique
coordonnées où il souhaite placer son symbole (X ou O). Utilisez des boucles
imbriquées pour afficher la grille et vérifier si un joueur a gagné après chaque
coup. Le jeu doit se poursuivre jusqu'à ce qu'il y ait un vainqueur ou un match
nul.
*/
$joueur1="toto";
$joueur2="lulu";
$caseMin=0;
$caseMax=9;
$caseMax++;
while ($caseMax<=9) {
echo  $joueur1 . "  choisissez une case de 1 a 9 ";
$case1=trim(fgets( STDIN)) ;
echo  $joueur2 . "  choisissez une case de 1 a 9 ";
$case2=trim(fgets( STDIN)) ;
}
if ( $case1==1 && $case1==2 && $case1==3 ){
    echo " alors " .$joueur1 ."gagne .";
}