<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Emp extends Model
{
    //
    protected $table = 'emps';

    public $primaryKey= 'id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
