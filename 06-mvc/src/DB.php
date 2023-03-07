<?php

namespace M2i\Mvc;

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
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_CLASS,
            ]);
        }

        return self::$pdo;
    }

    /**
     * Permet de faire un select sur la BDD.
     */
    public static function select(string $sql, array $parameters = [], string $class = null): array
    {
        $query = self::getInstance()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     * Permet de faire un select (seul) sur la BDD.
     */
    public static function selectOne(string $sql, array $parameters = [], string $class = null): mixed
    {
        $query = self::getInstance()->prepare($sql);
        $query->execute($parameters);
        $query->setFetchMode(\PDO::FETCH_CLASS, $class);

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
