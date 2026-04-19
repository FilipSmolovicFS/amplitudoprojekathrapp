<?php

namespace App\Service;
use App\Models\AuditLogs;

class AuditLogsService
{
    public function getAuditLogs(){
        return AuditLogs::query()->with('user')->paginate(10);
    }
}
