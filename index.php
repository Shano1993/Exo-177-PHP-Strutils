<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

require './classes/StrUtils.php';

$str = new StrUtils();

$str->bold('Ma chaîne en bold');
$str->italic('Ma chaîne en italic');
$str->underline('Ma chaîne en underline');
$str->capitalize('Ma chaîne en capitalize');
$str->uglify('Ma chaîne en bold, italic et underline');


