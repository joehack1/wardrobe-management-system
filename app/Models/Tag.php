<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function clothingItems()
    {
        return $this->belongsToMany(ClothingItem::class, 'clothing_item_tag');
    }
}