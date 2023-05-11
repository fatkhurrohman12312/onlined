<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $guarded = ['id'];

    public function fkProduct()
    {
        // return this
        return $this->hasMany(Product::class,'teacher_id','id');
    }
}
