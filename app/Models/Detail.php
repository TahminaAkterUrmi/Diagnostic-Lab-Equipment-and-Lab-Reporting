<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'appointment_details';
    protected $guarded=[];
    public function test()
    {

        return $this->belongsTo(Test::class,'test_id','id');
    }
    public function appointment()
    {

        return $this->belongsTo(Appointment::class,'appointment_id','id');
    }


    public function slots()
    {

        return $this->belongsTo(Slot::class,'slot','id');
    }



    public function equipment()
    {

        return $this->hasMany(TestEquipement::class,'test_id','test_id');
    }



}
