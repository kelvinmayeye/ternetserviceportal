<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function getImageAttribute($image){
        return asset("storage/services/".$image);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
