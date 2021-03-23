<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tickets;

class vehicles extends Model
{
    protected $fillable =[
        'garage', 'type', 'number_of_seats',
    ];
    public function tickets(){
        return $this->hasMany(tickets::class, 'vehickes_id', 'id');
    }
}
