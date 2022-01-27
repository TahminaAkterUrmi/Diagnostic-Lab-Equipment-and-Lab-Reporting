<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function category()
    {

        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function machine()
    {

        return $this->hasOne(Machine::class,'id','machine_id');
    }

    public function test_equipment()
    {

        return $this->hasMany(TestEquipement::class,'test_id','id');
    }
    
}
