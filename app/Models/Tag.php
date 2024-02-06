<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag'
    ];

    public $timestamps = false;

    public function events() {
        return $this->belongsToMany(Event::class);
    }

    public function residents() {
        return $this->belongsToMany(Resident::class);
    }
}
