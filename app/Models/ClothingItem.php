<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothingItem extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'category', 'description', 'image_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'clothing_item_tag');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}