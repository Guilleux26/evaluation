<?php
declare(strict_types=1);

namespace ClasseMetier;

use ClasseTechnique\Select;

class Etudiant
{

    // répertoire où sont stockés les photos des étudiants
    public const string DOSSIER_PHOTO_ETUDIANT = DOSSIER_WWW . '/data/photo/';

    public static function getAll(): array
    {
        $sql = <<<SQL
        SELECT
            e.id,
            e.nom,
            e.prenom,
            e.sexe,
            DATE_FORMAT(e.dateNaissance, '%d/%m/%Y') AS dateNaissance,
            o.libelleCourt,
            e.photo
        FROM etudiant e
        INNER JOIN options o ON e.idOption = o.id
        ORDER BY e.nom, e.prenom
    SQL;

        $select = new Select();

        return $select->getRows($sql);
    }

}