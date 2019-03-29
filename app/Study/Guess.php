<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/3/27
 * Time: 8:51
 */

namespace App\Study;


use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{
    protected $table='study_guess';
    public $false = false;

    public function guess($data){
        return self::insert($data);

    }
    public function getList(){
        return self::get()->toArray();
    }
    public function getInfo($id){
        return self::where('id',$id)->first();
    }
}