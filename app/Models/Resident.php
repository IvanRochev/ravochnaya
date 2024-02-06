<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'fio',
        'about',
        'photo'
    ];

    public function events() {
        return $this->belongsToMany(Event::class);
    }
    
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function resident_links() {
        return $this->hasMany(ResidentLink::class);
    }
}
