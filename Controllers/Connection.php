<?php

class Connection
{
    /**
     * @return PDO|void
     */
    public static function connect()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php_team_app', 'root', '');
        } catch (PDOException $event) {
            die($event->getMessage());
        }
    }
}
