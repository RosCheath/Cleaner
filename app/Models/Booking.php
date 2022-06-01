<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $fillable = [
        'service_id','user_id','location','telegram','status_type','date','time','cleaner_id'
    ];
    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function statuses(){
        return $this->belongsTo(Status::class);
    }
    public function cleaner(){
        return $this->belongsTo(User::class);
    }
}
