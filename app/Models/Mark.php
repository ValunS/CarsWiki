<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mark extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "marks";
    protected $guarded = [];

    public function cars(){
        return $this->hasMany(Car::class, "car_id", "id");
    }
}
