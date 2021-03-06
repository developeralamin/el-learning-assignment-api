<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


  protected $guarded = ['id'];

  public function category(){
   	   return $this->belongsTo(Category::class,'category_id','id');
   }

  public function lessons()
    {
        return $this->hasMany(Lesson::class,'courese_id','id');
    }


}
