<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $appends = ['available_balance'];
    
    public function getAvailableBalanceAttribute()
    {
        return $this->availableBalance();
    }

    /**
     * Get the available balance
     */
    public function availableBalance()
    {
        return $this->totalCredits() - $this->totalDebits();
    }

    /**
     * Get the total credits
     */
    public function totalCredits()
    {
        return $this->balanceTransactions->where('status', 1)->where('type', 1)->sum('amount');
    }

    /**
     * Get the all debits
     */
    public function totalDebits()
    {
        return $this->balanceTransactions->where('status', 1)->where('type', 0)->sum('amount');
    }

    /**
     * Get the balance transactions
     */
    public function balanceTransactions()
    {
        return $this->hasMany(AccountTransaction::class, 'account_id');
    }

    /**
     * Get the user who has created this account
     */
    public function addUser()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updateUser()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
