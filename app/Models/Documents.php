<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Documents extends Model
{
    public $fillable = [
        'file_path',
        'file_name'
    ];

    public function documentable(): MorphTo
    {
        return $this->morphTo();
    }
}
