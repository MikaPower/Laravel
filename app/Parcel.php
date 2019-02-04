<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parcel extends Model
{
    protected $fillable =['quantity','description','order_id','state_id'];

    /**
     * @param $id Id do estado a obter o nome
     * @return Model|\Illuminate\Database\Query\Builder|null|object
     */
    public function getStateNameById($id){
        $name=DB::table('states')->where('id',$id)->value('name');
      return $name;
    }


}
