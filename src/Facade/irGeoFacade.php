<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 4/23/2018
 * Time: 3:12 PM
 */

namespace Adlino\IranGeo\Facade;


use Illuminate\Support\Facades\Facade;

class irGeoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'irGeo';
    }
}