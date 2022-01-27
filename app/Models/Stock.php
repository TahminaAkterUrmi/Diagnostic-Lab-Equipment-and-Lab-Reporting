<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function equipment()
    {

        return $this->belongsTo(Equipment::class,'equipment_id','id');
    }
    
}
