<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function appointment()
    {

        return $this->belongsTo(Appointment::class,'appointment_id','id');
    }
    public function details()
    {

        return $this->belongsTo(Detail::class,'detail_id','id');
    }
    public function test()
    {

        return $this->belongsTo(Test::class,'test_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
     
}
