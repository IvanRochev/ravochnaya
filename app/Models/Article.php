<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_name',
        'about',
        'photo',
        'deleted',
        'active'
    ];

    public function events() {
        return $this->belongsToMany(Event::class);
    }
    
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function residents() {
        return $this->belongsToMany(Resident::class);
    }
}
