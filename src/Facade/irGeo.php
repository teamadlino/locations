<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 4/20/2018
 * Time: 10:32 PM
 */

namespace Adlino\IranGeo\Facade;


use Illuminate\Support\Facades\Facade;

class irGeo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'irGeo';
    }
}