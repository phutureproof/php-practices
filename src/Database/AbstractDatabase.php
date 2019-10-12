<?php

namespace PhutureProof\Database;

use PDO as PDOInterface;

/**
 * Class AbstractDatabase
 * @package PhutureProof\Database
 */
class AbstractDatabase extends PDOInterface
{
    /**
     * @var null|self $_instance
     */
    private static $_instance = null;

    /**
     * PDO like DSN string to connect to database
     *
     * @var string $dsn
     */
    protected static $dsn = '';

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        if (!self::$_instance) {
            self::$_instance = new self(static::$dsn);
        }

        return self::$_instance;
    }

    /**
     * @param string $sql
     * @param array $parameters
     * @return array
     */
    public function runQuery(string $sql, array $parameters = []): array
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($parameters);

        $data = $stmt->fetchAll(self::FETCH_OBJ) ?? null;
        return $data;
    }
}
