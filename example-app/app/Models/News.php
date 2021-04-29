<?php

namespace App\Models;

use App\Enums\NewsStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['title', 'text', 'category_id', 'slug', 'status', 'image'];
    protected $guarded = ['id'];

    public function  CategoryForThisNews(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
