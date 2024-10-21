<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTransaction extends Model
{
    use HasFactory, HasSlug;
    protected $slugSourceColumn = 'name';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the total credits
     */
    public function totalCredits()
    {
        return $this->where('status', 1)->where('type', 1)->sum('amount');
    }

    /**
     * Get the all debits
     */
    public function totalDebits()
    {
        return $this->where('status', 1)->where('type', 0)->sum('amount');
    }

    /**
     * Get the available balance
     */
    public function availableBalance()
    {
        return $this->totalCredits() - $this->totalDebits();
    }

    /**
     * Get the account that owns this transaction
     */
    public function cashbookAccount()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    /**
     * Get the user who has created this transaction
     */
    public function user()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
