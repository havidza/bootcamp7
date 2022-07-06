<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CampFeed extends Model
{
    use HasFactory;

    protected $fillable = ['camp_id', 'title', 'feed', 'mentor_id'];

    public function Camp(): BelongsTo
{
    return $this->belongsTo(User::class, 'foreign_key', 'other_key');
}

}
