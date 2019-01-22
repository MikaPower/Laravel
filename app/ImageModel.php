<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    public function user(){
        return $this->belongsTo('Abatjours');
    }
}
