<?php

namespace App\Models;

use App\Enums\TableLocation;
use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\{Factories\HasFactory, Model};

class Table extends Model
{
    use HasFactory;
    protected $fillable=['name','guest_number','status','location'];

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
