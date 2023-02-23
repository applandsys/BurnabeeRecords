<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoDetail extends Model
{
    use HasFactory;
    protected $fillable = ['video_id','release_year','quality','language','duration','singer','lyrics','tune','music_composition','direction','cast','label','recorded_at','tags'];
}

