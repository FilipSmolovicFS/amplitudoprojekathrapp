<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;


class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    public $fillable = ['first_name', 'last_name', 'email', 'started_at',
        'status_id',
        'position_id',
        'current_amount',
        'contract_type',
        'ended_at',
        'contract_type_id',
        'last_raise'
    ];

    public function status(): BelongsTo
    {
        return $this->belongsTo(EmployeeStatus::class);
    }

    public function contract(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function salary(): HasOne
    {
        return $this->hasOne(Salary::class);
    }

    #[Scope]
    protected function active(Builder $query): void
    {
            $query->whereHas('status', function($query){
                $query->where('id' , 1);
            });
    }

    #[Scope]
    protected function onLeave(Builder $query): void
    {
        $query->whereHas('status', function($query){
            $query->where('id', 2);
        });
    }
}
