<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\vehicles;
use App\user;


class tickets extends Model
{
    protected $fillable = [
        'mumber', 'users_id', 'departure_time', 'arrival_time', 'price', 'pick_up_point', 'drop_off_point',
    ];
    public function user(){
        return $this->hasOne(user::class, 'id', 'users_id');
    }
    public function vehicles(){
        return $this->hasOne(vehicles::class, 'id', 'vehicles_id');
    }
    public $timestamps=false;

    

}
