<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Indi_ID',
        'ApplicationType',
        'SchemeOption',
         'Region',
         'CellNumber',
         'Email',
         'ShopSteward',
         'MainRegion',
         'MainStation',
         'MainDepartment',
         'MainSurname',
         'MainName',
         'MainIDNumber',
         'MainAge',
         'MainUMGCWABO',
         'MainCellNumber',
         'MainWorkNumber',
         'MainPremium',
         'MainEmail',
         'SapuNumber',
         'PostalAdd',
         'Residential',
         'NewLead',
         'Status',
         'ProType',
         'SignedDoc',
         'agent',
         'policy_num',





    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
