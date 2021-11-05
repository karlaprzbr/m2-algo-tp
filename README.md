# M2 - Algorithmique avancée

## TP : Clavier SMS

Le fichier suivant contient une liste de mots en français, sans accents : liste_francais.txt

L'objectif de cet exercice est d'écrire un programme pouvant servir à un clavier intelligent sur téléphone pour faciliter l'écriture de SMS, en utilisant la répartition standard des lettres sur un clavier de téléphone :

- A ou B ou C => touche 2
- D ou E ou F => touche 3
- G ou H ou I => touche 4
- J ou K ou L => touche 5
- M ou N ou O => touche 6
- P ou Q ou R ou S => touche 7
- T ou U ou V => touche 8
- W ou X ou Y ou Z => touche 9

(Regardez votre clavier de téléphone pour comprendre)

Par exemple, le mot "abandon" serait traduit par la séquence de touches suivante : 2 2 2 6 3 6 6, qu'on écrira avec le code numérique suivant : 222636. Les chiffres ne sont pas répétés pour une même lettre, il n'est pas possible de différencier un A d'un B ou d'un C lors d'une pression sur la touche 2.

Avec notre système, un même code numérique (une même séquence de touches) peut donc correspondre à plusieurs mots.

**Dans le langage de votre choix, écrire une fonction qui prend en paramètre un code numérique entier et trouve le plus rapidement possible tous les mots de la liste qui correspondent à ce code.**
