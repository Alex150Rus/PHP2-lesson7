<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 11.01.2019
 * Time: 14:56
 */

namespace app\services;

use app\interfaces\IDb;


class Db implements IDb
{
  private $config;

  //хранится соединение
  private $conn = null;

  public function __construct($driver, $host, $login, $password, $database, $charset)
  {
    $this->config = [
      'driver' => $driver,
      'host' => $host,
      'login' => $login,
      'password' => $password,
      'database' => $database,
      'charset' => $charset,
    ];
  }


  private function getConnection()
  {
    if (is_null($this->conn)) {
      $this->conn = new \PDO(
        $this->prepareDsnString(),
        $this->config['login'],
        $this->config['password']
      );
      $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }
    return $this->conn;
  }

  private function query(string $sql, array $params = [])
  {

    $pdoStatement = $this->getConnection()->prepare($sql);

    $pdoStatement->execute($params);
    return $pdoStatement;
  }

  public function queryObject($sql, $className, $params = []) {
    $pdoStatement = $this->query($sql, $params);
    $pdoStatement->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $className);
    return $pdoStatement->fetchAll();
  }

  public function getLastInsertId() {
    return $this->getConnection()->lastInsertId();
  }

  public function execute($sql, array $params = [])
  {
  $this->query($sql, $params);
    return true;
  }

  private function prepareDsnString()
  {
    return sprintf("%s:host=%s;dbname=%s;charset=%s",
      $this->config['driver'],
      $this->config['host'],
      $this->config['database'],
      $this->config['charset']
    );
  }
}