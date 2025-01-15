<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment; // Import model Comment

class Post extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'user_id', // Sesuaikan dengan struktur tabel posts
    ];

    /**
     * Relasi Post dengan Comment (One to Many)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
