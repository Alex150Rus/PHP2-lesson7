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
  public function getTableName() :string
  {
    return 'cart';
  }

  function getRecordClass()
  {
    return Cart::class;
  }
}