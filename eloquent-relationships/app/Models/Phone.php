<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import model User

class Phone extends Model
{
    use HasFactory;

    /**
     * Kolom yang bisa diisi
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'phone_number', // Sesuaikan dengan kolom di tabel phones
    ];

    /**
     * Relasi Phone dengan User (Many-to-One)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
