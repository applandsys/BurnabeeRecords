<?php

namespace App\MyInterface;


interface StatsInterface{

    public function totalView();

    public function monthlyView();

    public function todayView();

    public function totalVisitors();

   

}