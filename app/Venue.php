<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Venue extends Model
{
    //
   // use SoftDeletes;
    protected $fillable =['name','adress','rfc','rnim','curp','prosec','ppc','noprogram','email','activity','immex','intermaquilas','productsToimport','division','businesstype'];
    //protected $dates = ['deleted_at'];

    public function user(){
    	//return $this->belongsTo(user::class);
    }
}



 