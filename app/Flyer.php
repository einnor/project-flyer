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
     * Find the flyer at the given address
     * @param String $zip
     * @param String $street
     * @return
     */
    public static function locatedAt($zip, $street)
    {
        $street = str_replace('-', ' ', $street);
        return static::where(compact('zip', 'street'))->first();
    }


    public function addPhoto(Photo $photo){
        return $this->photos()->save($photo);
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
