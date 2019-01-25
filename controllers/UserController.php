<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 19.01.2019
 * Time: 3:32
 */

namespace app\controllers;


use app\models\repositories\UserRepository;
use app\base\App;

class UserController extends Controller
{

  public function actionIndex()
  {
    $user = new UserRepository();
    echo $this->render("checkout", ['user'=>$user, 'className' => $this->getClassName()]);
  }

  public function actionLogin()
  {
    App::call()->request->getHttpReferrer();
    $userRepository = new UserRepository();
    $formInfo = $userRepository->getFormInfo();
    $userRepository->ifUserExists($formInfo);
  }

  public function actionRegister()
  {
    App::call()->request->getHttpReferrer();
    $userRepository = new UserRepository();
    $formInfo = $userRepository->getFormInfo();
    if (!$userRepository->ifUserExists($formInfo)) {
      $userRepository->addUserToDb($formInfo);
    };

    //если нет, то написать, что пользователь с таким именем уже есть $_SESSION[Message]
    // доьавить в сессию и написать, ято успешно зарегистрировался и мессидж стереть
  }

  public function actionLogout()
  {

  }

  public function getClassName() {
    return 'user';
  }
}