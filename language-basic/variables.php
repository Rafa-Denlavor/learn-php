<?php

# VARIABLE GLOBAL
global $global;
# VARIABLE STATIC - Utilizada em funções, pois é uma variável que não é destruída após a função ser finalizada.
static $soma = 'oii';

# VARIABLE DYNAMIC
$dynamic = "PHP";
$PHP = "Sou uma variável dinâmica, criada a partir de outra!" . PHP_EOL;
echo $$dynamic;

# CONSTANT
define("CONSTANT", "Hello world!");
// echo CONSTANT;
