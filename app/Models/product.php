<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class product extends Model
{
    use HasFactory;

    protected $table ='produtos';

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function category(){
        return $this->belongsTo(Category::class,'id_category');
    }
}
