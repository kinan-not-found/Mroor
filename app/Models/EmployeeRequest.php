<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeRequest extends Model
{

    protected $fillable = ['name', 'email','password',];

}