<?php

namespace App\MyRepository;

use App\MyInterface\StatsInterface;
use App\Models\HitCounter;
use App\Models\User;
use Carbon\Carbon;


class StatsRepository implements StatsInterface{

    public function totalView(){
        return HitCounter::sum('raw_hits');
    }

    public function monthlyView(){
        $month = date("m");
        return HitCounter::whereMonth('created_at',$month)->sum('raw_hits');
    }

    public function todayView(){
        $month = date("d");
        return HitCounter::whereDate('updated_at', Carbon::today())->sum('raw_hits');
    }

    public function totalVisitors(){
        return User::count();
    }

 

}


