<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'title',
        'category_id',
        'cover_image',
        'total_episodes',
        'current_episode',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
