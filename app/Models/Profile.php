<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'forename',
        'last_name',
        'updated_at',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
