<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\DB;

abstract class Model
{
    /**
     * Permet de renvoyer toutes les lignes d'une table liée au modèle.
     */
    public static function all(): array
    {
        $table = get_called_class(); // M2i\Mvc\Model\Movie
        $table = substr(strrchr($table, '\\'), 1); // \Movie => Movie
        $table = strtolower($table); // Movie => movie

        return DB::select("SELECT * FROM $table");
    }
}
