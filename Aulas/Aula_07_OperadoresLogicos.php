<?php

$primeiroDado = true;
$segundoDado = false;

$primeiroResultado = $primeiroDado && $segundoDado;
echo $primeiroResultado, "<br>";

$terceiroDado = true;
$quartoDado = false;

$segundoResultado = $terceiroDado || $quartoDado;
echo $segundoResultado, "<br>";

$quintoDado = true;
$sextoDado = false;

$terceiroResultado = !$quintoDado;
echo $terceiroResultado;