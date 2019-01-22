<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    public function abatjours(){
        return $this->belongsTo(Abatjours::class);
    }
}
