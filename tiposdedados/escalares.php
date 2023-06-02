<?php
// ***Escalares***//
$nome = "Jonathan";
var_dump($nome);

if (is_numeric($nome)):
    echo "é um número";
else:
    echo "é uma string";
endif;