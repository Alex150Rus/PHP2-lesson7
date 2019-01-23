<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 10.01.2019
 * Time: 23:29
 */

namespace app\models;

class Product extends Record
{
  public $id;
  public $name;
  public $description;
  public $price;
  public $vendor_id;
  public $img_src;

public function __construct(
  $id = null, $name = null, $description = null, $price = null, $vendor_id = null, $img_src = null
)
{
  $this->id=$id;
  $this->name=$name;
  $this->description=$description;
  $this->price=$price;
  $this->vendor_id=$vendor_id;
  $this->img_src=$img_src;
}
}