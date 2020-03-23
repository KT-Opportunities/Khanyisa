<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class DebitOrderAuth extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Indi_ID',
        'AccHolderName',
        'BankName',
        'BranchName',
        'AccNumber',
        'BranchCode',
        'Amount',
        'AccType',
        'StartDate',
        
    ];
}
