<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }
    public static function getAllCategory(){
        return  Category::orderBy('id','DESC')->paginate(10);
    }
}
