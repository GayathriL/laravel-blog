<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    public function isComplete()
    {
    	return true;
    }
    public static function inComplete()
    {
       return static::where('isComplete',1)->get();
    	//return $qry->where('isComplete',1);
    }
}
