<?php

// BOUCLE FOR
echo "<h1>Boucle for</h1>";
echo "<h2>0 à 9 inclus</h2>";
echo "<ul>";
for($i=0; $i<10; $i++) {
    echo "<li>$i</li>";
}
echo "</ul>";

echo "<h2>0 à 10 inclus</h2>";
echo "<ul>";
for($i=0; $i<=10; $i++) {
    echo "<li>$i</li>";
}
echo "</ul>";

echo "<h2>1 à 10 inclus</h2>";
echo "<ul>";
for($i=1; $i<=10; $i++) {
    echo "<li>$i</li>";
}
echo "</ul>";

echo "<h2>10 à 0 inclus</h2>";
echo "<ul>";
for($i=10; $i>=0; $i--) {
    echo "<li>$i</li>";
}
echo "</ul>";

echo '<h2>a25 à 50 inclus, tous les 5</h2>';
echo "<ul>";
for ($i=25;$i<=50;$i+=5){
    echo "<li>$i</li>";
}
echo "</ul>";

echo '<h2>10 à -10, tous les 3</h2>';
echo "<ul>";
for ($i=10;$i>=(-10);$i-=3){
    echo "<li>$i</li>";
}
echo "</ul>";

// CONDITIONS
$name = 'Darth Vader';
echo "<h1>Conditions</h1>";
if($name == "Darth Vader" || $name == "Darth Sidius") {
    echo "<p>Sith</p>";
} else if ($name == "Yoda") {
    echo "<p>Jedi</p>";
} else {
    echo "<p>Sans doute une personne sans pouvoir</p>";
}

// TABLEAU INDEXE
echo "<h1>Tableau indexé</h1>";
$jedis = [
    'Obi-Wan Kenobi',
    'Yoda',
    'Luke',
    'Skywalker',
    'Windu',
    'Qui-gon Jinn',
];

$jedis[] = "Rey";

echo "<p>Le plus vieux Jedi est <strong>$jedis[1]</strong>.</p>";

foreach($jedis as $jedi) {
    echo "<p>$jedi</p>";
}

// TABLEAU ASSOCIATIF
echo "<h1>Tableaux Associatif</h1>";
$tableauAss = [
    "Yoda" => 900,
    "Leia" => 19,
    "Luke Skywalker" => 19,
    "Darth Vader" => 46,
    "Chewbacca" => 200,
];

$tableauAss["Han Solo"] = 29;
ksort($tableauAss);
echo "<ul>";
foreach($tableauAss as $jedi) {
    echo "<li>$jedi</li>";
}
echo "</ul>";

echo "<ul>";
foreach($tableauAss as $name => $age) {
    echo "<li>$name $age</li>";
}
echo "</ul>";

echo "<ul>";
foreach($tableauAss as $name => $age) {
    if($age > 100) {
        echo "<li>$name $age</li>";
    }
}
echo "</ul>";

$tableauMulti = [
    "Jedi" => [
        "Luke Skywalker",
        "Yoda",
        "Windu",
    ],
    "Sith" => [
        "Darth Vader",
        "Darth Maul",
        "Dooku",
    ],
    "Gungan" => [
        "Jar Jar Binks",
    ],
    "Human" => [
        "Han Solo",
        "Leia",
    ],
];

echo "<h1>Boucle sur le tableau afin d'afficher les noms de race dans une balise h2, suivi d'une liste pour les noms de cette race</h1>";
foreach ($tableauMulti as $race => $persos) {
    echo "<h2>$race</h2><ul>";
    foreach($persos as $perso) {
        echo "<li>$perso</li>";
    }
    echo "</ul>";
}

echo "<h1>Boucle sur le tableau pour afficher dans une liste, la race et le nombre de personnages de cette race</h1>";
foreach($tableauMulti as $race => $persos) {
    $nbPersos = count($persos);
    echo "<p>$race : $nbPersos</p>";
}