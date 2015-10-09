<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Flyer extends Model {

    /**
     * un flyer es compuesto por muchas fotos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

}
