<?php

function sayHello() {
    echo "Hello Nite Owl";
}

function sayHello2() : string {
    return $sentence = "Hello Nite Owl";
}

function sayHello3(string $name = "Dr. Manhattan") : string {
    return $sentence = "Hello $name";
}

function whoAmI(string $name, array $watchmen = ['Dr. Manhattan', 'Ozymandias',
'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl']) {
    if( in_array($name, $watchmen) ) {
        $result = "$name est un watchmen.";
    } else {
        $result = "C'est un intrus!";
    }
    return $result;
}