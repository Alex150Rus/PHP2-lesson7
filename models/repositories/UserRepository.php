<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 21.01.2019
 * Time: 22:42
 */

namespace app\models\repositories;

use app\models\User;


class UserRepository extends Repository
{
  public function getTableName() :string
  {
    return 'users';
  }

  function getRecordClass()
  {
    return User::class;
  }
}