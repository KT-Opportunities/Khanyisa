<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ExtendedFamily extends Model
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
        'RepatriationPre',
        'UMNGCWABO',
        'CoverAmount',
        'Premium',
        'TotalPremium',
        'TotalEXPremium',
        

        
    ];
}
