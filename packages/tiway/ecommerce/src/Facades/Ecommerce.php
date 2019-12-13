<?php
/**
 * Created by PhpStorm.
 * User: HASEE
 * Date: 2019-08-17
 * Time: 16:54
 */

namespace Tiway\Ecommerce\Facades;

use Illuminate\Support\Facades\Facade;

class Ecommerce extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ecommerce';
    }
}