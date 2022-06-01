<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $fillable = [
        'service_id','user_id','location','telegram','status_type','date','time'
    ];
    public function service(){
        return $this->belongsTo(service::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
