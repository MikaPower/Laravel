<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abatjour extends Model
{


    protected $fillable = [
        'reference','name','price'];
    
    public function imagemodels(){
        return $this->hasOne(ImageModel::class);
    }
}
