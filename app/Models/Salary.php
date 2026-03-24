<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Salary extends Model
{
    /** @use HasFactory<\Database\Factories\SalaryFactory> */
    use HasFactory;

    public $fillable = ['current_amount'];

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function salaryHistory(): HasMany
    {
        return $this->hasMany(SalaryHistory::class);
    }
}
