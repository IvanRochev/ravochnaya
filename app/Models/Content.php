<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель контента
 */

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'type',
        'deleted',
        'active'
    ];

    public function events() {
        return $this->belongsTo(Event::class);
    }

    public function scopeGetLastContent($query, $numbers){
        return $query->where('deleted', 0)
            ->orderBy('created_at')
            ->take($numbers)
            ->get();
    }

    public function scopeGetAllContentPaginate($query, $numbers){
        return $query->where('deleted', 0)
            ->orderBy('created_at', 'desc')
            ->paginate($numbers);
    }
}
