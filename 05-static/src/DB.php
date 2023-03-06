<?php

namespace M2i\F1;

class DB
{
    private static ?\PDO $pdo = null;

    /**
     * Permet d'établir une connexion à la BDD ou de la réutiliser.
     */
    private static function getInstance(): \PDO
    {
        if (! self::$pdo) {
            self::$pdo = new \PDO('mysql:host=localhost;dbname=webflix', 'root', '', [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        }

        return self::$pdo;
    }

    /**
     * Permet de faire un select sur la BDD.
     */
    public static function select(string $sql, array $parameters = []): array
    {
        $query = self::getInstance()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    /**
     * Permet de faire un select (seul) sur la BDD.
     */
    public static function selectOne(string $sql, array $parameters = []): array
    {
        $query = self::getInstance()->prepare($sql);
        $query->execute($parameters);

        return $query->fetch();
    }

    /**
     * Permet de faire une insertion dans la BDD.
     */
    public static function insert(string $sql, array $parameters = []): bool
    {
        return self::getInstance()->prepare($sql)->execute($parameters);
    }
}
