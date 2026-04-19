<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Employee> $employee
 * @property-read int|null $employee_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmployeeStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmployeeStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmployeeStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmployeeStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmployeeStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmployeeStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmployeeStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EmployeeStatus extends Model
{
    protected $fillable = [
        'name',
    ];

    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class, 'status_id');
    }
}
