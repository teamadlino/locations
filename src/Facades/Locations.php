<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 4/23/2018
 * Time: 3:12 PM
 */

namespace Adlino\Locations\Facades;


use Illuminate\Support\Facades\Facade;

class locations extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'locations';
    }
}