<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['last_name','first_name','gender','email','postcode','address','building_name','opinion'];


public static $rules = array(
        'last_name' => 'required',
        'first_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'postcode' => 'required',
        'address' => 'required',
        'building_name' => 'nullable',
        'opinion' => 'required',
    );

}
