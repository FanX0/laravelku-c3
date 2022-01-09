<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use HasFactory, Sluggable;


protected $guarded = ['id'];

public function category()
{
    return $this->belongsTo(Category::class);
}
public function getRouteKeyName()
{
    return 'slug';
}
public function sluggable(): array
{
    return [
        'slug' => [
            'source' => 'judul_berita'
        ]
    ];
}
}