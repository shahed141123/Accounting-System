<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $appends = ['calculated_salary'];

    /**
     * Get the present salary.
     *
     * @return string
     */
    public function getCalculatedSalaryAttribute()
    {
        return $this->totalSalary();
    }

    /**
     * Return employee total salary.
     */
    public function totalSalary()
    {
        if (! empty($this->salaryIncrements)) {
            return $this->salary + $this->salaryIncrements->where('status', 1)->sum('increment_amount');
        }

        return $this->salary;
    }

    /**
     * Return employee increments.
     */
    public function salaryIncrements()
    {
        return $this->hasMany(SalaryIncrement::class, 'empolyee_id');
    }

    /**
     * Return employee department.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    /**
     * Get the user .
     */
    public function user()
    {
        return $this->belongsTo(Admin::class);
    }
}
