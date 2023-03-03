<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celebrity extends Model
{
    use HasFactory;
    protected $fillable = ['celebrity_name','nick_name','description','profile_photo','facebook_link','twitter_link','video_id'];
}


