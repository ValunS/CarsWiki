<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "cars";
    protected $guarded = [];

    public function mark(){
        return $this->belongsTo(Mark::class, "mark_id", "id");
    }
    
}
