<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['slider_postion','video_id','file_name'];

    public function video(){
        return $this->belongsTo(Video::class,'video_id');
    }

    public function sliderimage(){
        return $this->hasMany(SliderImage::class, 'slider_id');
    }

}

