<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphMany;


/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $status_id
 * @property int $position_id
 * @property string $date_of_birth
 * @property string $phone_number
 * @property string $address
 * @property string $JMBG
 * @property string $gender
 * @property string $started_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Contract> $contract
 * @property-read int|null $contract_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Documents> $document
 * @property-read int|null $document_count
 * @property-read \App\Models\Position $position
 * @property-read \App\Models\Salary|null $salary
 * @property-read \App\Models\EmployeeStatus|null $status
 * @method static Builder<static>|Employee active()
 * @method static \Database\Factories\EmployeeFactory factory($count = null, $state = [])
 * @method static Builder<static>|Employee newModelQuery()
 * @method static Builder<static>|Employee newQuery()
 * @method static Builder<static>|Employee onLeave()
 * @method static Builder<static>|Employee query()
 * @method static Builder<static>|Employee terminated()
 * @method static Builder<static>|Employee whereAddress($value)
 * @method static Builder<static>|Employee whereCreatedAt($value)
 * @method static Builder<static>|Employee whereDateOfBirth($value)
 * @method static Builder<static>|Employee whereEmail($value)
 * @method static Builder<static>|Employee whereFirstName($value)
 * @method static Builder<static>|Employee whereGender($value)
 * @method static Builder<static>|Employee whereId($value)
 * @method static Builder<static>|Employee whereJMBG($value)
 * @method static Builder<static>|Employee whereLastName($value)
 * @method static Builder<static>|Employee wherePhoneNumber($value)
 * @method static Builder<static>|Employee wherePositionId($value)
 * @method static Builder<static>|Employee whereStartedAt($value)
 * @method static Builder<static>|Employee whereStatusId($value)
 * @method static Builder<static>|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
        'last_raise',
        'date_of_birth',
        'phone_number',
        'jmbg',
        'address',
        'gender'
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

    public function document(): MorphMany
    {
        return $this->morphMany(Documents::class, 'documentable');
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

    #[Scope]
    protected function terminated(Builder $query): void
    {
        $query->whereHas('status', function($query){
            $query->where('id', 3);
        });
    }
}
