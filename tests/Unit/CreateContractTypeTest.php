<?php

use App\Models\ContractType;

test('Test Create Contract Type', function () {

    $request = [
        'contractType' => 'Full-time'
    ];

    $queryMock = Mockery::mock();
    $queryMock->shouldReceive('create')
        ->once()
        ->with([
            'name' => 'Full-time'
        ])
        ->andReturnTrue();

    Mockery::mock('alias:' . ContractType::class)
        ->shouldReceive('query')
        ->once()
        ->andReturn($queryMock);

    $service = new class {
        public function createContractType(array $request)
        {
            ContractType::query()->create([
                'name' => $request['contractType']
            ]);
        }
    };

    $service->createContractType($request);

});
