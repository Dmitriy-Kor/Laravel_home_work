<?php

namespace App\Models;

use App\Enums\NewsStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    public function getNews($is_admin = false)
    {
        if(!$is_admin) {
            return \DB::table($this->table)
                ->select(['id', 'title', 'image', 'text', 'created_at','status'])
                ->where('status', NewsStatusEnum::PUBLISHED)
                ->get();
        }
        return \DB::table($this->table)
            ->select(['id', 'title', 'image', 'text', 'created_at','status'])
            ->get();
    }
    public function getNewsById(int $id)
    {
        return \DB::table($this->table)
            ->select(['id','title','image','text','created_at','status'])
            ->where('id', '=', $id)
            ->first();
    }
}
