<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'upload_img',
        'category_id'
    ];

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class);
    }

    public function category()
    {
        return $this->belongsTo(MenuCategory::class);
    }
}