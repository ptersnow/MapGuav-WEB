<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'name', 'lat', 'lng'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}