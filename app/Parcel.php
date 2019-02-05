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
        dd($id);
        $name=DB::table('states')->where('id',$id)->value('name');
      return $name;
    }

    public function  getStateNamesNotUsed(){

        $names=DB::table('states')
            ->select('id','name')
            ->get();
        if($key=array_search($this->getStateNameById($this->id),$names)!==false){
            print_r($key);
        unset($names[$key]);
        return $names;
        }

return abort(403, 'getStateNamesNotUsed error');
    }
}
