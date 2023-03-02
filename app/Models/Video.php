<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['title','content_type','video_type','category_id','thubmnail_image','description','youtube_iframe_link'];

    public function videodatail(){
        return $this->hasOne(VideoDetail::class, 'video_id');
    }


    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }



    public function hitcounter(){
        return $this->hasMany(hitcounter::class, 'post_id', 'id');
    }

}



