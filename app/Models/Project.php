<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
   use SoftDeletes; //recuperar proyecto eliminado, mediante deleted_at


    protected $fillable =['titulo', 'url' , 'description', 'category_id'];

    
    public function getRouteKeyName()
    {
       return 'url';
    }

    public function category() 
    {
       return $this->belongsTo(Category::class);
    }

    use HasFactory;
}
