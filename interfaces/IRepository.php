<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 21.01.2019
 * Time: 22:49
 */

namespace app\interfaces;

interface IRepository
{
  function getOne(int $id);
  function getAll();
  function getTableName() : string ;
}