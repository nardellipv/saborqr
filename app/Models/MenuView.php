<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuView extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'viewed_at',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

