<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 11.01.2019
 * Time: 0:41
 */

namespace app\models;


class User extends Record
{
 public $id;
 public $login;
 public $password;

  public function __construct(
    $login = null, $password = null, $id = null)
  {
    $this->id = $id;
    $this->login = $login;
    $this->password = $password;
  }
}