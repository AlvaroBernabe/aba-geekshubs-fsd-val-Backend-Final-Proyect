<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_image',
        'title',
        'summary',
        'game_id',
    ];

    public function games()
    {
        return $this->belongsTo(Game::class);
    }

}
