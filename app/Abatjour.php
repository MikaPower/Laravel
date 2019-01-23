<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abatjour extends Model
{
    public function imagemodels(){
        return $this->hasOne(ImageModel::class);
    }
}
