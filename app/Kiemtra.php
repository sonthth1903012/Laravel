<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiemtra extends Model
{
    protected $table = 'Kiemtra';


    protected $fillable = ['name','age','address','phone'];

}
