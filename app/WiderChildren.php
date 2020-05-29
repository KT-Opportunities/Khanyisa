<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class WiderChildren extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Indi_ID',
        'Name',
        'IDNumber',
        'Premium',
        'TotalPremium',
    ];
        
}
