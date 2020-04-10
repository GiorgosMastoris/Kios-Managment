<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\Admin\Role;

class Role extends Model
{
   public function users(){
       return $this->belongsToMany('App\User');
   }
}
