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
        $table = self::table();

        // Pour accèder au nom de la classe actuelle
        // dump(get_called_class()); // M2i\Mvc\Model\Movie
        // dump(self::class); // M2i\Mvc\Model\Model (Classe dans laquelle on écrit cela)
        // dump(static::class); // M2i\Mvc\Model\Movie (Classe qui appelle la méthode all())

        return DB::select("SELECT * FROM $table", [], get_called_class());
    }

    /**
     * Permet de générer le nom de la table par rapport au nom du modèle.
     */
    private static function table(): string
    {
        $table = get_called_class(); // M2i\Mvc\Model\Movie
        $table = substr(strrchr($table, '\\'), 1); // \Movie => Movie
        $table = strtolower($table); // Movie => movie

        return $table;
    }
}
