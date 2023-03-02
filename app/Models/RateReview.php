<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateReview extends Model
{
    use HasFactory;
    protected $fillable =['post_id','post_type','user_id','rating','review_text'];

    public function video(){
        return belongsTo(Video::class,'post_id');
    }

    public function user(){
        return belongsTo(User::class,'user_id');
    }
}

