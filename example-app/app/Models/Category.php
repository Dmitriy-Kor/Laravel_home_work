<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function  getCategories()
    {
        return \DB::table($this->table)->select(['id','title','created_at','image'])
            ->where('is_visible', true)
            ->get();
    }
}
