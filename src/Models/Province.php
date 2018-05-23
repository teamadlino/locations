<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 4/20/2018
 * Time: 10:35 PM
 */

namespace Adlino\Locations\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'en_name',
        'area_code',
        'latitude',
        'longitude',
        'approved'
    ];

    /**
     * Relations with counties
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getCounties()
    {
        return $this->hasMany(County::class);
    }

    /**
     * Relations with cities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getCities()
    {
        return $this->hasMany(City::class);
    }
}
