<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 25.01.2018
 * Time: 10:47
 */
require_once 'tekst.php';

// loome teksti objekt
// määrame tekstile konkreetne sisu
$minuTekst = new tekst('Tere Maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// prindime välja
$minuTekst->prindiTekst();

// loome veel ühe objekti
// ja määrame sisu
$mustTekst = new tekst('Must tekst');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($mustTekst);
echo '</pre>';
// prindime välja
$mustTekst->prindiTekst();