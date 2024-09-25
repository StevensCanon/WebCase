<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

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
