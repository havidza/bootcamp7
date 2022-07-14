<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampFeed extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'feed', 'image', 'mentor_id', 'camp_id'];

    // public function Camp(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    // }
    public function Camp(): BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }
}
