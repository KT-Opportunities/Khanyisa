<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class OwnChildern extends Model
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
        'UMNGCWABO',
        'Premium',
        'TotalPremium',
        

        
    ];
}
