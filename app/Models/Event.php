<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель мероприятий
 */

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'name',
        'deleted',
        'active'
    ];

    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];

    public function contents() {
        return $this->hasMany(Content::class);
    }

    public function residents() {
        return $this->belongsToMany(Resident::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function readableDate(){
        return $this->date->diffForHumans();
    }

    public function scopeGetLastEvents($query, $numbers){
        return $query->with('tags')->where('active', 1)
            ->where('deleted', 0)
            ->orderBy('date')
            ->take($numbers)
            ->get();
    }
}
