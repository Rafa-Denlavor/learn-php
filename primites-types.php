<?php
// DOCUMENTAÇÂO -> https://www.php.net/manual/pt_BR/language.types.php

# STRING
$language = "PHP";

# BOOLEAN
$isVisible = true;

# JS -> NUMBER
$amount = 12;

# FLOAT
$value = 12.3;

# OBJECT
$animal = new class { };

# NULL
$withoutValue = null;

# RESOURCE
$source = "Verificar como usar";

# ARRAY
$configuration = array("Java", "Cobol", 10);
$configuration2[] = "postgres";
$configuration2[] = "mongodb";
// print_r($configuration);
/* EX: Array
(
    [0] => Java
    [1] => Cobol
    [2] => 10
) */

# ASSOCIATIVE ARRAYS - Ao invés de índices numéricos, utilizar nomes em forma de índice
$aluno1["Nome"] = "Rafaella";
$aluno1["Idade"] = 21;
$aluno1["Trabalha?"] = true;
$aluno2 = array("Nome" => "Carlos", "Idade" => 23, "Trabalha?" => false);
print_r($aluno1);
print_r($aluno2);
/* Array
(
    [Nome] => Rafaella
    [Idade] => 21
    [Trabalha?] => 1
) */

# Matriz
$matriz[][] = "";
print_r($matriz);
