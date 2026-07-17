<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'target_amount',
        'collected_amount',
        'status',
        'slug',
        'completed_at',
    ];

    protected $casts = [
        'target_amount' => 'decimal:2',
        'collected_amount' => 'decimal:2',
        'completed_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function (Event $event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->name) . '-' . Str::random(6);
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getProgressPercentageAttribute(): float
    {
        if ($this->target_amount <= 0) return 0;
        return min(100, ($this->collected_amount / $this->target_amount) * 100);
    }

    public function isCompleted(): bool
    {
        return $this->collected_amount >= $this->target_amount;
    }
}