<?php
use App\Config;

class Db
{
    protected static $instance = null;
    protected PDO $dbh;
    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $config = \App\Config::conf_instance ();

        $db_host = $config->data['prod_db']['host'];
        $db_name = $config->data['prod_db']['dbname'];
        $db_user = $config->data['prod_db']['dbuname'];
        $db_pass = $config->data['prod_db']['dbpass'];
        $this->dbh = new \PDO('mysql:host='.$db_host.';dbname='.$db_name.'', $db_user, $db_pass);
        $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

    }

    public function query($sql, $class): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $data): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }

}
