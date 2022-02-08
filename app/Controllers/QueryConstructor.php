<?php

/**
 * @property $db_connection
 */
class QueryConstructor
{
    protected $db_connection;

    /**
     * @param PDO $db_connection
     */
    public function __construct(PDO $db_connection)
    {
        $this->db_connection = $db_connection;
    }

    /**
     * @param $db_table
     *
     * @return array|false
     */
    public function selectAll($db_table)
    {
        $statement = $this->db_connection->prepare("SELECT * FROM {$db_table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
