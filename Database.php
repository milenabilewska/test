<?php

namespace PHPDB\DB;

class Database

{

    public $mysql_host;
    public $port;
    public $username;
    public $password;
    public $database ;

    /**
     * @param string $mysql_host
     * @param string $port
     * @param string $username
     * @param string $password
     * @param string $database
     */
    public function __construct($mysql_host, $port, $username, $password, $database)
    {
        $this->mysql_host = $mysql_host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    /**
     * @return string
     */
    public function getMysqlHost()
    {
        return $this->mysql_host;
    }

    /**
     * @param string $mysql_host
     */
    public function setMysqlHost($mysql_host)
    {
        $this->mysql_host = $mysql_host;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @param string $database
     */
    public function setDatabase($database)
    {
        $this->database = $database;
    }


}