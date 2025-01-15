<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post; // Import model Post

class Comment extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_id',
        'content',
    ];

    /**
     * Relasi Comment dengan Post (Many to One)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
