<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditLogs extends Model
{
    /** @use HasFactory<\Database\Factories\AuditLogsFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'method', 'path', 'status_code', 'payload', 'ip_address'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
