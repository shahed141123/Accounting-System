<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BalanceTransfer extends Model
{
    use HasFactory,HasSlug;
    protected $slugSourceColumn = 'reason';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function debitTransaction()
    {
        return $this->belongsTo(AccountTransaction::class, 'debit_id');
    }

    /**
     * Get the credit tansaction for this transfer.
     */
    public function creditTransaction()
    {
        return $this->belongsTo(AccountTransaction::class, 'credit_id');
    }

    /**
     * Get the user who had created this transfer.
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
