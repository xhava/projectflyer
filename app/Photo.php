<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

    protected $table = 'flyer_photos';

    protected $fillable = ['photo'];

    /**
     * un una foto pertenece a un flyer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }
}
