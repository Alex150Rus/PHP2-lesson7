<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 21.01.2019
 * Time: 22:26
 */

namespace app\models\repositories;

use app\models\Product;

class ProductRepository extends Repository
{
public function getTableName():string
{
  return 'products';
}

public function getRecordClass()
{
  return Product::class;
}
}