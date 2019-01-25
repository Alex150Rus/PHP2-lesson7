<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 19.01.2019
 * Time: 0:45
 */

namespace app\controllers;

use app\base\App;
use app\services\Request;
use app\models\repositories\CartRepository;
use app\models\repositories\ProductRepository;

class CartController extends Controller

{
  public function actionIndex() {
    $productsInCart = (new CartRepository())->getCart();
    if (!$productsInCart) {
      $productsInCart = [];
    }
    echo $this->render("cart", ['products' => $productsInCart, 'className'=>$this->getClassName()]);
  }

  public function actionAdd()
  {
    App::call()->request->getHttpReferrer();
    $id = (new Request())->getParams()['id'];
    $productInCart = (new ProductRepository())->getOne($id);
    new CartRepository($productInCart, $id);
    }

  public function actionDel()
  {
    App::call()->request->getHttpReferrer();
    $id =  App::call()->request->getParams()['id'];
    (new CartRepository)->decreaseItemQ_ty($id);
  }

  public function actionRemove()
  {
    App::call()->request->getHttpReferrer();
    $id =  App::call()->request->getParams()['id'];
    (new CartRepository)->deleteItem($id);
  }

  public function actionClear() {
    App::call()->request->getHttpReferrer();
    (new CartRepository)->clearCart();
  }

  public function getClassName() {
    return 'cart';
  }
}