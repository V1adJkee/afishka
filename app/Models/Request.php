<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'about_me', 'status', 'author_id'];
    protected $casts = ['created_at' => 'datetime:d.m.Y H:i'];
}
