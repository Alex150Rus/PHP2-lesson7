<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 21.01.2019
 * Time: 22:42
 */

namespace app\models\repositories;

use app\models\Cart;


class CartRepository extends Repository
{

  public function __construct($cart = null, $id=null)
  {
    parent::__construct();
    session_start();
    if ($cart != null || $id !=null) {
      $counter = $_SESSION['goodsCounter'][$id] +=1;
      $_SESSION['cart'][$id] = $cart;
      $_SESSION['cart'][$id]->q_ty= $counter;
      $_SESSION['cart'][$id]->total_price = $counter * $_SESSION['cart'][$id]->price;
    }
  }

  public function getCart() {
    return $_SESSION['cart'];
  }

  public function showQ_ty ()
  {
    var_dump($_SESSION['goodsCounter']);
    return $_SESSION['goodsCounter'];
  }

  public function getTableName() :string
  {
    return 'cart';
  }

  function getRecordClass()
  {
    return Cart::class;
  }
}