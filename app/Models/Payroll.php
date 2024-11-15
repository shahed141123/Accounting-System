<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    /**
     * Get the  tansaction for this payroll.
     */
    public function payrollTransaction()
    {
        return $this->belongsTo(AccountTransaction::class, 'transaction_id');
    }

    /**
     * Get the user who had created this payroll.
     */
    public function addUser()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
    public function updateUser()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}
