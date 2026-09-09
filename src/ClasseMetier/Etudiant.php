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
            select id, nom, prenom, sexe, dateNaissance, photo
            from etudiant
            order by nom, prenom
SQL;

        $select = new Select();
        return $select->getRows($sql);

        foreach ($lesLignes as &$ligne) {
            $ligne['present'] = isset($ligne['photo']) && $ligne['photo'] !== '' && is_file(self::DOSSIER_PHOTO_ETUDIANT . $ligne['photo']);
        }
        return $lesLignes;

    }

}