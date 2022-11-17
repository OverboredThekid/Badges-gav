<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Card_Details extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'exp_date',
        'file_name',
        'file_path_location',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
