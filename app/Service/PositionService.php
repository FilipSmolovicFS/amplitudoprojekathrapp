<?php

namespace App\Service;

use App\Models\Position;

class PositionService
{

    public function index()
    {
        return Position::all();
    }

    public function deletePosition(Position $position): bool
    {
        if ($position->employee()->exists()) {
            return false;
        }

        $position->delete();
        return true;
    }

    public function createNewPosition(array $data): Position
    {
        return Position::query()->create([
            'name' => $data['position'],
        ]);
    }

}
