<?php

declare(strict_types=1);

use ClasseTechnique\Page;
use ClasseMetier\Etudiant;

/** @noinspection PhpIncludeInspection */
require $_SERVER['DOCUMENT_ROOT'] . "/../bootstrap/bootstrap.php";

$page = new Page();

$page->setTitre("La consultation et la recherche des données");

$page->setDonnee(
    'lesEtudiants',
    Etudiant::getAll()
);

$page->afficher();