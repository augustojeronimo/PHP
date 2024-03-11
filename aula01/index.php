<?php

$nota1 = $_GET['n1'] ?? 0;
$nota2 = $_GET['n2'] ?? 0;
$nota3 = $_GET['n3'] ?? 0;

$media = (2*$nota1 + 3*$nota2 + 5*$nota3)/10;

echo "<h1>$media</h1>";