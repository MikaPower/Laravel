<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abatjours extends Model
{
    public function ImageModel(){
        return $this->hasOne(ImageModel::class);
    }

    public function getId(){
        return $this->id;
    }
}
