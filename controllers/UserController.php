<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 19.01.2019
 * Time: 3:32
 */

namespace app\controllers;


use app\models\repositories\UserRepository;
use app\services\Request;

class UserController extends Controller
{

  public function actionIndex()
  {
    $user = new UserRepository();
    echo $this->render("checkout", ['user'=>$user, 'className' => $this->getClassName()]);
  }

  public function actionLogin()
  {

  }

  public function actionRegister()
  {
    (new Request())->getHttpReferrer();
    $login = $this->clearLogin($_POST['login']);
    $password = md5(md5($_POST['password']));
    $userRepository = new UserRepository();
    if (!$userRepository->ifUserExists($login)) {
      $userRepository->addUserToDb($login, $password);
    };

    //если нет, то написать, что пользователь с таким именем уже есть $_SESSION[Message]
    // доьавить в сессию и написать, ято успешно зарегистрировался и мессидж стереть
  }

  public function actionLogout()
  {

  }

  public function clearLogin($login) {
    return $login=strip_tags(trim($login));
  }

  public function getClassName() {
    return 'user';
  }
}