<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

    /**
     * Fillable fields for a flyer
     * @var array
     */
    protected $fillable = [
        'street',
        'city',
        'zip',
        'state',
        'country',
        'price',
        'description'
    ];


    /**
     * Scope query to those located at a given address
     * @param Builder $query
     * @param String $zip
     * @param String $street
     * @return Builder
     */
    public function scopeLocatedAt($query, $zip, $street)
    {
        $street = str_replace('-', ' ', $street);
        return $query->where(compact('zip', 'street'));
    }


    function getPriceAttribute($price){
        return '$ ' . number_format($price);
    }


    /**
     * A flyer is comprised of many photos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos() {
        return $this->hasMany('App\Photo');
    }
}
