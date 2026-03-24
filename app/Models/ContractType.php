<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContractType extends Model
{
    /** @use HasFactory<\Database\Factories\ContractTypeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function contract(): HasMany
    {
        return $this->hasMany(Contract::class);
    }
}
