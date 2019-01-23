<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 19.01.2019
 * Time: 0:45
 */

namespace app\controllers;

use app\services\Request;
use app\models\repositories\CartRepository;
use app\models\repositories\ProductRepository;

class CartController extends Controller
{
  public function actionIndex() {
    $product = (new CartRepository())->getAll();
    // отправляем на отрисовку
    echo $this->render("cart", ['product' => $product, 'className'=>$this->getClassName()]);
  }
  //рисует карточку товара
  public function actionCard()
  {
    // для этого метода не применяем статическую часть сайта
    //получаем id us url (прилетит туда гет запросом)
    $id = (new Request())->getParams()['id'];
    //создаём необходимую сущность для отрисовки, вытаскивая нужную инфу из БД
    $product = (new CartRepository())->getOne($id);
    // отправляем на отрисовку
    echo $this->render("card", ['product' => $product, 'className'=>$this->getClassName()]);
  }

  public function actionAdd()
  {
    $id = (new Request())->getParams()['id'];;
    //создаём необходимую сущность для отрисовки, вытаскивая нужную инфу из БД
    if (!$this->checkIfInCart()) {
    $product = (new ProductRepository())->getOne($id);
    (new CartRepository)->insert($product);
    // отправляем на отрисовку
    echo $this->render("card", ['product' => $product, 'className'=>$this->getClassName()]);
    }
  }

  public function actionDel()
  {
    $id = (new Request())->getParams()['id'];;
    //создаём необходимую сущность для отрисовки, вытаскивая нужную инфу из БД
    if ($this->checkIfInCart()) {
      $product = (new ProductRepository())->getOne($id);
      (new CartRepository)->delete($product);
      $location = $_SERVER['HTTP_REFERER'];
      header('Location:' . $location);
    }
  }

  public function getClassName() {
    return 'cart';
  }

  public function checkIfInCart () {
    $id = (new Request())->getParams()['id'];
    $product = (new CartRepository())->getOne($id);
    if ($product !== null) {
      return true;
    }
  }
}

// проверить есть ли товар в корзине и потом только добавлять