<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParserSource extends Model
{
    use HasFactory;

    protected $table = 'parser_source';
    protected $fillable = ['url', 'description', 'is_visible'];
    protected $casts = ['is_visible' => 'boolean'];
    protected $guarded = ['id'];
}
