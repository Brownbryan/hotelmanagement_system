<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'client_id','room_id','checkin_date','checkout_date','total_amount','paid','balance','status'
    ];
}
// ,'stay_days'