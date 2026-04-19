<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property string $documentable_type
 * @property int $documentable_id
 * @property string $file_path
 * @property string $file_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $documentable
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents whereDocumentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents whereDocumentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Documents whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
