<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property float $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $salary_id
 * @property-read \App\Models\Salary $salary
 * @method static \Database\Factories\SalaryHistoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory whereSalaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalaryHistory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
