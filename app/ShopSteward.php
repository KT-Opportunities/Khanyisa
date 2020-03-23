<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ShopSteward extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'FullName',
        'Gender',
        'ID_No',
        'Persal_No',
        'Cell',
        'Email',
        'Province',
        'Region',
        'Info_Rec',
        'Training',
        'Comments',
        'Station',


        
    ];
}
