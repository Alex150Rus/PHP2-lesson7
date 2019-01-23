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
    $productsInCart = (new CartRepository())->getCart();
    echo $this->render("cart", ['products' => $productsInCart, 'className'=>$this->getClassName()]);
  }

  //public function actionCard()
  //
  //  //получаем id us url (прилетит туда гет запросом)
  //  $id = (new Request())->getParams()['id'];
  //  //создаём необходимую сущность для отрисовки, вытаскивая нужную инфу из БД
  //  $product = (new CartRepository())->getOne($id);
  //  // отправляем на отрисовку
  //  echo $this->render("card", ['product' => $product, 'className'=>$this->getClassName()]);
  //}

  public function actionAdd()
  {
    (new Request())->getHttpReferrer();
    $id = (new Request())->getParams()['id'];
    $productInCart = (new ProductRepository())->getOne($id);
    new CartRepository($productInCart, $id);
    }

  public function actionDel()
  {
    $id = (new Request())->getParams()['id'];
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
}