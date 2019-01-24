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

  protected $session;

  public function __construct() {
    parent::__construct();
    if (!$this->session) {
      session_start();
      $this->session = true;
    }
  }


  public function ifUserExists($login) {
    $user = (new UserRepository())->getAll();
    foreach($user as $key => $value) {
      if ($value->login == $login) {
        $_SESSION['message'] ='';
        $_SESSION['message'] = 'Пользователь существует, попробуйте другое имя или залогиньтесь';
        return true;
      }
    }
    unset($_SESSION['message']);
    return false;
  }

  public function addUserToDb($login, $password){
    $newUser = new User($login, $password);
    (new UserRepository())->insert($newUser);
    $_SESSION['user'] = $newUser;
    $_SESSION['message'] = 'Спасибо за регистрацию';
  }

  function getFormInfo(){

  }

  public function getTableName() :string
  {
    return 'users';
  }

  function getRecordClass()
  {
    return User::class;
  }
}