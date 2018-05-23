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

class City extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province_id',
        'county_id',
        'name',
        'en_name',
        'latitude',
        'longitude',
        'approved'
    ];

    /**
     * Relations with province
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getProvince()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Relations with county
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getCounty()
    {
        return $this->belongsTo(County::class);
    }
}
