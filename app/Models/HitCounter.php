<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HitCounter extends Model
{
    use HasFactory;
    protected $fillable = ['post_id','ip_address','post_type','unique_hits','raw_hits'];
}

