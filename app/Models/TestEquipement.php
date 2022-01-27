<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestEquipement extends Model
{
    use HasFactory;
    protected $table="test_equipement";

    protected $guarded=[];

    public function equipment()
    {

        return $this->belongsTo(Equipment::class,'equipment_id','id');
    }
}
