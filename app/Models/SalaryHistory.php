<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalaryHistory extends Model
{
    /** @use HasFactory<\Database\Factories\SalaryHistoryFactory> */
    use HasFactory;

    protected $fillable = ['amount', 'salary_id'];

    public function salary(): BelongsTo
    {
        return $this->belongsTo(Salary::class);
    }
}
