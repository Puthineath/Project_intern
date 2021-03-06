<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['id','first_name','last_name','email','department','position','phone_number'];
    
}
