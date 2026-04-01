<?php

use App\Models\EmployeeStatus;
use App\Models\Position;
use App\Models\ContractType;

test('Test Get Statuses, Positions and Contract Types', function () {

    // --- EmployeeStatus mock ---
    $statusPluckMock = Mockery::mock();
    $statusPluckMock->shouldReceive('toArray')
        ->once()
        ->andReturn([
            1 => 'Active',
            2 => 'Inactive',
        ]);

    $statusAllMock = Mockery::mock();
    $statusAllMock->shouldReceive('pluck')
        ->once()
        ->with('name', 'id')
        ->andReturn($statusPluckMock);

    Mockery::mock('alias:' . EmployeeStatus::class)
        ->shouldReceive('all')
        ->once()
        ->andReturn($statusAllMock);


    // --- Position mock ---
    $positionPluckMock = Mockery::mock();
    $positionPluckMock->shouldReceive('toArray')
        ->once()
        ->andReturn([
            1 => 'Developer',
            2 => 'Manager',
        ]);

    $positionAllMock = Mockery::mock();
    $positionAllMock->shouldReceive('pluck')
        ->once()
        ->with('name', 'id')
        ->andReturn($positionPluckMock);

    Mockery::mock('alias:' . Position::class)
        ->shouldReceive('all')
        ->once()
        ->andReturn($positionAllMock);


    // --- ContractType mock ---
    $contractPluckMock = Mockery::mock();
    $contractPluckMock->shouldReceive('toArray')
        ->once()
        ->andReturn([
            1 => 'Full-time',
            2 => 'Part-time',
        ]);

    $contractAllMock = Mockery::mock();
    $contractAllMock->shouldReceive('pluck')
        ->once()
        ->with('name', 'id')
        ->andReturn($contractPluckMock);

    Mockery::mock('alias:' . ContractType::class)
        ->shouldReceive('all')
        ->once()
        ->andReturn($contractAllMock);


    // Class under test
    $service = new class {
        public function getStatusesAndPositionsAndContractTypes()
        {
            return [
                'statuses' => EmployeeStatus::all()->pluck('name', 'id')->toArray(),
                'positions' => Position::all()->pluck('name', 'id')->toArray(),
                'contractTypes' => ContractType::all()->pluck('name', 'id')->toArray(),
                'expireContract' => [15,30,90]
            ];
        }
    };

    $result = $service->getStatusesAndPositionsAndContractTypes();

    expect($result['statuses'])->toBe([
        1 => 'Active',
        2 => 'Inactive',
    ])
        ->and($result['positions'])->toBe([
            1 => 'Developer',
            2 => 'Manager',
        ])
        ->and($result['contractTypes'])->toBe([
            1 => 'Full-time',
            2 => 'Part-time',
        ])
        ->and($result['expireContract'])->toBe([15, 30, 90]);

});
