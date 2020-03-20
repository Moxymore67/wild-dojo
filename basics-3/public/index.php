<?php

require_once "../src/function.php"; ?>

<h1>FONCTION</h1>
<ol><li>Crée une fonction nommée sayHello permettant d'écrire "Hello Nite Owl"
        .</li></ol>

<p><?php echo sayHello(); ?></p>

<hr>
<h1>RETOUR</h1>
<ol><li>Modifie la fonction pour qu'elle retourne "Hello Nite Owl" plutôt que de
    l'afficher directement. Cette fonction ne doit pouvoir retourner que des
        chaînes.</li></ol>

<p><?php echo sayHello2(); ?></p>

<hr>
<h1>PARAMETRE</h1>
<ol><li>Modifie la en lui ajoutant un paramètre nommé "name" de type string
        .</li>
    <li>Modifie la fonction pour qu'elle retourne "Hello [name]".</li>
    <li>Rend le paramètre "name" optionnel. Si rien n'est précisé, ta fonction
        devra retourner "Hello Dr. Manhattan".</li>
</ol>

<p><?php echo sayHello3(); ?></p>
<p><?php echo sayHello3("Yavuz"); ?></p>
<hr>
<h1>FIN</h1>
<ol><li>Crée une nouvelle fonction nommée "whoAmI", cette fonction retournera
        une chaîne (ou null).</li>
    <li>Elle prendra deux paramètres : name de type string et watchmen de type
        array. watchmen contiendra la liste de tous les watchmen ('Dr.
        Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian',
        'Nite Owl').</li>
    <li>Algo : Retourne "{name} est un watchmen" uniquement si {name} est un
        watchmen : Retourne "c'est un intrus" si {name} n'en est pas un.</li>
</ol>

<p><?php echo whoAmI("Alex"); ?></p>
<p><?php echo whoAmI("Ozymandias"); ?></p>