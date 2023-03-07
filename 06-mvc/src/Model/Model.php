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
     * Permet de renvoyer une seule ligne d'une table liée au modèle.
     */
    public static function find(int $id): mixed
    {
        $table = self::table();

        return DB::selectOne("SELECT * FROM $table WHERE id_$table = :id", [
            'id' => $id,
        ], get_called_class());
    }

    /**
     * Permet de stocker le modèle dans la base.
     */
    public function save(): void
    {
        $table = self::table();

        // get_object_vars() permet d'avoir un tableau contenant les propriétés public
        // de l'objet
        $properties = get_object_vars($this);
        array_shift($properties); // Enlève la première valeur (id_movie)
        $keys = array_keys($properties);

        // On doit récupérer les colonnes de l'objet
        $columns = implode(', ', $keys);
        // On récupèrer les colonnes avec : devant
        $values = implode(', :', $keys);

        $sql = "INSERT INTO $table ($columns) VALUES (:$values)";

        DB::insert($sql, $properties);
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
